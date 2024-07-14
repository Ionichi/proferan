<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Yajra\DataTables\Facades\DataTables;
use App\Models\Adminlain;

class AdminlainController extends BaseController
{
    public function index()
    {
        return view('pages.adminlain.index');
    }

    public function table(Request $request)
    {
        $data = Adminlain::query();
        return DataTables::of($data)
            ->editColumn('keterangan', function ($data) {
                return ucfirst($data->keterangan);
            })
            ->addColumn('action', function ($data) {
                return '<button type="button" id="' . $data->id . '" class="btnEdit btn btn-warning rounded mr-1"><span class="mdi mdi-lead-pencil"></span></button>';
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function edit($id)
    {
        try {
            $lain = Adminlain::findOrFail($id);
            return response()->json(['data' => $lain, 'message' => 'Data ditemukan', 'code' => 200], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Data tidak ditemukan atau tidak valid!', 'code' => 404], 404);
        }
    }

    // public function update(Request $request)
    // {
    //     $validated = $request->validate([
    //         'id' => 'required|exists:admin_lains,id',
    //         'judul' => 'required|string|max:255',
    //         'subjudul' => 'required|string|max:255',
    //         'keterangan' => 'required|string',
    //         'file' => 'nullable|file|mimes:jpg,png,pdf|max:2048',
    //     ]);

    //     $adminLain = Adminlain::find($request->id);
    //     $adminLain->judul = $request->judul;
    //     $adminLain->subjudul = $request->subjudul;
    //     $adminLain->keterangan = $request->keterangan;

    //     if ($request->hasFile('file')) {
    //         $filePath = $request->file('file')->store('uploads', 'public');
    //         $adminLain->file = $filePath;
    //     }

    //     $adminLain->save();

    //     return response()->json(['code' => 200, 'data' => $adminLain]);
    // }

    public function update(Request $request, $id)
    {
        try {
            $validated = $request->validate([
                'judul' => 'required|string|max:255',
                'subjudul' => 'required|string|max:255',
                'keterangan' => 'required|string',
                'file' => 'nullable|file|mimes:jpg,png,pdf,docx,pptx,xlsm,txt,mp4|max:40000',
            ]);

            $adminLain = Adminlain::findOrFail($id);
            $adminLain->judul = $request->judul;
            $adminLain->subjudul = $request->subjudul;
            $adminLain->keterangan = $request->keterangan;

            // Hapus file jika diminta
            if ($request->has('deleteFile') && $request->deleteFile == 1) {
                if ($adminLain->file && Storage::disk('public')->exists($adminLain->file)) {
                    Storage::disk('public')->delete($adminLain->file);
                    $adminLain->file = null;
                }
            } else if ($request->hasFile('file')) {
                // Simpan file baru
                if ($adminLain->file && Storage::disk('public')->exists($adminLain->file)) {
                    Storage::disk('public')->delete($adminLain->file);
                }
                $filePath = $request->file('file')->store('uploads', 'public');
                $adminLain->file = $filePath;
            }

            $adminLain->save();

            return response()->json(['code' => 200, 'data' => $adminLain, 'message' => 'Data berhasil diperbarui!']);
        } catch (\Exception $e) {
            Log::error('Update Error: ' . $e->getMessage());
            return response()->json(['code' => 500, 'message' => 'Terjadi kesalahan saat menyimpan data!'], 500);
        }
    }

}
