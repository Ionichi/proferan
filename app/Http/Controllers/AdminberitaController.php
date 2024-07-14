<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Services\ModuleService;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;
use App\Models\Berita;

class AdminberitaController extends BaseController
{
    protected $moduleService;

    public function __construct(ModuleService $moduleService)
    {
        $this->moduleService = $moduleService;
    }

    public function index()
    {
        return view('pages.admin.index');
    }

    public function table(Request $request)
    {
        $data = Berita::query();

        if ($request->has('query')) {
            $data->where('judul', 'LIKE', "%" . $request->get('query') . "%");
        }

        return DataTables::of($data)
            ->editColumn('tanggal', function ($data) {
                return Carbon::parse($data->tanggal)->locale('id')->settings(['formatFunction' => 'translatedFormat'])->format('d F Y');
            })
            ->editColumn('keterangan', function ($data) {
                return ucfirst($data->keterangan);
            })
            ->addColumn('action', function ($data) {
                $button = '<button type="button" id="' . $data->id . '" class="btnEdit btn btn-warning rounded mr-1"><span class="mdi mdi-lead-pencil"></span></button>';
                $button .= '<button type="button" id="' . $data->id . '" class="btnDel btn btn-danger rounded"><span class="mdi mdi-delete"></span></button>';
                return $button;
            })
            ->rawColumns(['action'])
            ->make(true);
    }


    public function createUpdate(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'tanggal' => 'required|date',
                'judul' => 'required|string|max:255',
                'keterangan' => 'required|string',
                'link' => 'nullable|url|max:500',
                'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ],
            [
                'tanggal.required' => 'Tanggal berita wajib diisi.',
                'judul.required' => 'Judul berita wajib diisi.',
                'keterangan.required' => 'Keterangan berita wajib diisi.',
                'link.url' => 'Format link tidak valid.',
                'gambar.image' => 'File harus berupa gambar.',
            ]
        );

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->messages()], 422);
        }

        $berita = $request->id ? Berita::find($request->id) : new Berita();

        $berita->tanggal = $request->tanggal;
        $berita->judul = $request->judul;
        $berita->keterangan = $request->keterangan;
        $berita->link = $request->link;

        if ($request->hasFile('gambar')) {
            if ($berita->gambar && file_exists(public_path($berita->gambar))) {
                unlink(public_path($berita->gambar)); // Menghapus gambar lama
            }

            $image = $request->file('gambar');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('assets/images/berita'), $imageName);
            $berita->gambar = 'assets/images/berita/' . $imageName;
        }

        $berita->save();

        return response()->json(['message' => 'Berita berhasil disimpan.', 'code' => 200, 'status' => 'success']);
    }


    public function edit($id)
    {
        try {
            $berita = Berita::findOrFail($id);
            return response()->json(['data' => $berita, 'message' => 'Data ditemukan', 'code' => 200], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Data tidak ditemukan atau tidak valid!', 'code' => 404], 404);
        }
    }


    // public function destroy(Request $request)
    // {
    //     $berita = Berita::find($request->id);
    //     if ($berita) {
    //         $berita->delete();
    //         return response()->json(['message' => 'Berita berhasil dihapus.', 'code' => 200, 'status' => 'success']);
    //     } else {
    //         return response()->json(['message' => 'Data tidak ditemukan.', 'code' => 404, 'status' => 'error']);
    //     }
    // }

    public function destroy(Request $request)
    {
        $berita = Berita::find($request->id);
        if ($berita) {
            // Hapus gambar terkait jika ada
            if ($berita->gambar && file_exists(public_path($berita->gambar))) {
                unlink(public_path($berita->gambar)); // Menghapus gambar dari storage
            }

            $berita->delete(); // Hapus record berita dari database

            return response()->json(['message' => 'Berita berhasil dihapus.', 'code' => 200, 'status' => 'success']);
        } else {
            return response()->json(['message' => 'Data tidak ditemukan.', 'code' => 404, 'status' => 'error']);
        }
    }
}
