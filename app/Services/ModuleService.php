<?php

namespace App\Services;

use App\Models\LogError;
use App\Models\MasterAkun;
use App\Models\Transaksi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ModuleService
{
    public function processModuleCreate($module, $request)
    {
        if($module == 'pemasukan') {
            DB::beginTransaction();
            try {
                $transaksi = new Transaksi();
                $transaksi->user_id = Auth::user()->id;
                $transaksi->tgl = $request->tgl;
                $transaksi->nomor_akun_debit = 111;
                $transaksi->nominal_debit = $request->nominal;
                $transaksi->nomor_akun_kredit = $request->jenis_transaksi;
                $transaksi->nominal_kredit = $request->nominal;
                $transaksi->keterangan = ucfirst($request->keterangan);
                $transaksi->type = $module;
                $transaksi->save();

                $akunKas = MasterAkun::where('user_id', Auth::user()->id)->where('nomor_akun', 111)->firstOrFail();
                $akunKas->nominal += $request->nominal;
                $akunKas->save();

                $akun = MasterAkun::where('user_id', Auth::user()->id)->where('nomor_akun', $request->jenis_transaksi)->firstOrFail();
                if($akun->saldo_normal == 'kredit') {
                    $akun->nominal += $request->nominal;
                    $akun->save();
                }
                else {
                    $akun->nominal -= $request->nominal;
                    $akun->save();
                }

                if($request->has('potongan')) {
                    $transaksiPot = new Transaksi();
                    $transaksiPot->user_id = Auth::user()->id;
                    $transaksiPot->tgl = $request->tgl;
                    $transaksiPot->nomor_akun_debit = 412;
                    $transaksiPot->nominal_debit = $request->potongan;
                    $transaksiPot->nomor_akun_kredit = 111;
                    $transaksiPot->nominal_kredit = $request->potongan;
                    $transaksiPot->keterangan = "Potongan: " . ucfirst($request->keterangan);
                    $transaksiPot->type = $module;
                    $transaksiPot->save();

                    $akunPot = MasterAkun::where('user_id', Auth::user()->id)->where('nomor_akun', 412)->firstOrFail();
                    $akunPot->nominal += $request->potongan;
                    $akunPot->save();
                    $akunKasPot = MasterAkun::where('user_id', Auth::user()->id)->where('nomor_akun', 111)->firstOrFail();
                    $akunKasPot->nominal -= $request->potongan;
                    $akunKasPot->save();
                }

                DB::commit();
                return response()->json([
                    'status' => 'success',
                    'message' => 'Berhasil menambahkan data pemasukan!',
                    'code' => 200,
                ], 200);
            } catch (\Exception $e) {
                DB::rollBack();
                LogError::create([
                    'user_id' => Auth::user()->id,
                    'action' => 'Tambah Pemasukan',
                    'message' => $e,
                ]);

                return response()->json([
                    'status' => 'error',
                    'message' => 'Gagal menambahkan data pemasukan!',
                    'code' => 500,
                ], 500);
            }
        }
        else {
            return response()->json([
                'status' => 'error',
                'message' => 'Module tidak valid!',
                'code' => 404,
            ], 404);
        }
    }

    public function processModuleUpdate($module, $request)
    {
        if ($module == 'pemasukan') {
            DB::beginTransaction();
            try {
                $transaksi = Transaksi::where('id', $request->id)->where('user_id', Auth::user()->id)->where('type', 'pemasukan')->firstOrFail();
                $potongan = Transaksi::where('user_id', Auth::user()->id)->where('keterangan', 'LIKE', "Potongan: ".$transaksi->keterangan)->where('type', 'pemasukan')->first();

                $akunKas = MasterAkun::where('user_id', Auth::user()->id)->where('nomor_akun', 111)->firstOrFail();
                $akunKas->nominal -= $transaksi->nominal_debit;
                $akunKas->nominal += $request->nominal;
                $akunKas->save();

                $akun = MasterAkun::where('user_id', Auth::user()->id)->where('nomor_akun', $transaksi->nomor_akun_kredit)->firstOrFail();
                if($request->jenis_transaksi == $transaksi->nomor_akun_kredit) {
                    if($akun->saldo_normal == 'kredit') {
                        $akun->nominal -= $transaksi->nominal_kredit;
                        $akun->nominal += $request->nominal;
                    } else {
                        $akun->nominal += $transaksi->nominal_kredit;
                        $akun->nominal -= $request->nominal;
                    }
                    $akun->save();
                }
                else {
                    if($akun->saldo_normal == 'kredit') {
                        $akun->nominal -= $transaksi->nominal_kredit;
                    } else {
                        $akun->nominal += $transaksi->nominal_kredit;
                    }
                    $akun->save();

                    $akunBaru = MasterAkun::where('user_id', Auth::user()->id)->where('nomor_akun', $request->jenis_transaksi)->firstOrFail();
                    if ($akunBaru->saldo_normal == 'kredit') {
                        $akunBaru->nominal += $request->nominal;
                    } else {
                        $akunBaru->nominal -= $request->nominal;
                    }
                    $akunBaru->save();
                }


                if($request->has('potongan')) {
                    if($potongan) {
                        $akunPot = MasterAkun::where('user_id', Auth::user()->id)->where('nomor_akun', 412)->firstOrFail();
                        $akunPot->nominal -= $potongan->nominal_debit;
                        $akunPot->nominal += $request->potongan;
    
                        $akunKasPot = MasterAkun::where('user_id', Auth::user()->id)->where('nomor_akun', 111)->firstOrFail();
                        $akunKasPot->nominal += $potongan->nominal_kredit;
                        $akunKasPot->nominal -= $request->potongan;

                        $potongan->user_id = Auth::user()->id;
                        $potongan->tgl = $request->tgl;
                        $potongan->nominal_debit = $request->potongan;
                        $potongan->nominal_kredit = $request->potongan;
                        $potongan->keterangan = "Potongan: " . ucfirst($request->keterangan);
                        $potongan->save();
                    }
                    else {
                        $transaksiPot = new Transaksi();
                        $transaksiPot->user_id = Auth::user()->id;
                        $transaksiPot->tgl = $request->tgl;
                        $transaksiPot->nomor_akun_debit = 412;
                        $transaksiPot->nominal_debit = $request->potongan;
                        $transaksiPot->nomor_akun_kredit = 111;
                        $transaksiPot->nominal_kredit = $request->potongan;
                        $transaksiPot->keterangan = "Potongan: " . ucfirst($request->keterangan);
                        $transaksiPot->type = $module;
                        $transaksiPot->save();

                        $akunPot = MasterAkun::where('user_id', Auth::user()->id)->where('nomor_akun', 412)->firstOrFail();
                        $akunPot->nominal += $request->potongan;

                        $akunKasPot = MasterAkun::where('user_id', Auth::user()->id)->where('nomor_akun', 111)->firstOrFail();
                        $akunKasPot->nominal -= $request->potongan;
                    }
                }
                else {
                    $akunPot = MasterAkun::where('user_id', Auth::user()->id)->where('nomor_akun', 412)->firstOrFail();
                    $akunPot->nominal -= $potongan->nominal_debit;

                    $akunKasPot = MasterAkun::where('user_id', Auth::user()->id)->where('nomor_akun', 111)->firstOrFail();
                    $akunKasPot->nominal += $potongan->nominal_kredit;

                    if($potongan)
                        $potongan->delete();
                }
                $akunPot->save();
                $akunKasPot->save();

                $transaksi->user_id = Auth::user()->id;
                $transaksi->tgl = $request->tgl;
                $transaksi->nominal_debit = $request->nominal;
                $transaksi->nomor_akun_kredit = $request->jenis_transaksi;
                $transaksi->nominal_kredit = $request->nominal;
                $transaksi->keterangan = ucfirst($request->keterangan);
                $transaksi->save();

                DB::commit();
                return response()->json([
                    'status' => 'success',
                    'message' => 'Berhasil mengupdate data pemasukan!',
                    'code' => 200,
                ], 200);
            } catch (\Exception $e) {
                DB::rollBack();
                LogError::create([
                    'user_id' => Auth::user()->id,
                    'action' => 'Ubah Pemasukan',
                    'message' => $e,
                ]);

                return response()->json([
                    'status' => 'error',
                    'message' => 'Gagal mengupdate data pemasukan!',
                    'code' => 500,
                ], 500);
            }
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Module tidak valid!',
                'code' => 404,
            ], 404);
        }
    }

    public function processModuleDestroy($module, $request)
    {
        if($module == 'pemasukan') {
            DB::beginTransaction();
            try {
                $transaksi = Transaksi::where('id', $request->id)->where('user_id', Auth::user()->id)->where('type', 'pemasukan')->firstOrFail();
                $potongan = Transaksi::where('user_id', Auth::user()->id)->where('keterangan', 'LIKE', "Potongan: ".$transaksi->keterangan)->where('type', 'pemasukan')->first();

                $akunKas = MasterAkun::where('user_id', Auth::user()->id)->where('nomor_akun', 111)->firstOrFail();
                $akunKas->nominal -= $transaksi->nominal_debit;
                $akunKas->save();

                $akun = MasterAkun::where('user_id', Auth::user()->id)->where('nomor_akun', $transaksi->nomor_akun_kredit)->firstOrFail();
                if ($akun->saldo_normal == 'kredit') {
                    $akun->nominal -= $transaksi->nominal_kredit;
                    $akun->save();
                }
                else {
                    $akun->nominal += $transaksi->nominal_kredit;
                    $akun->save();
                }

                if ($potongan) {
                    $akunPot = MasterAkun::where('user_id', Auth::user()->id)->where('nomor_akun', 412)->firstOrFail();
                    $akunPot->nominal -= $potongan->nominal_debit;
                    $akunPot->save();
                    $akunKasPot = MasterAkun::where('user_id', Auth::user()->id)->where('nomor_akun', 111)->firstOrFail();
                    $akunKasPot->nominal += $potongan->nominal_kredit;
                    $akunKasPot->save();

                    $potongan->delete();
                }
                $transaksi->delete();

                DB::commit();
                return response()->json([
                    'status' => 'success',
                    'message' => 'Berhasil menghapus data pemasukan!',
                    'code' => 200,
                ], 200);
            } catch (\Exception $e) {
                DB::rollBack();
                LogError::create([
                    'user_id' => Auth::user()->id,
                    'action' => 'Hapus Pemasukan',
                    'message' => $e,
                ]);

                return response()->json([
                    'status' => 'error',
                    'message' => 'Gagal mengahapus data pemasukan!',
                    'code' => 500,
                ], 500);
            }
        }
        else {
            return response()->json([
                'status' => 'error',
                'message' => 'Module tidak valid!',
                'code' => 404,
            ], 404);
        }
    }
}