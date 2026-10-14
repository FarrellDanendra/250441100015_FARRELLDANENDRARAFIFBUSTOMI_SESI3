<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sewa;

class SewaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Sewa::with('kendaraan');

        if ($request->filled('cari')) {
            $cari = $request->cari;

            $query->where(function ($q) use ($cari) {
                $q->where('merek', 'like', "%{$cari}%")
                    ->orWhere('nama_penyewa', 'like', "%{$cari}%");
            });
        }
        if ($request->filled('kendaraan')) {
            $query->where('kendaraan_id', $request->kendaraan);
        }

        $sewa = $query
            ->orderByDesc('created_at');

        return response()->json($sewa, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $sewa = Sewa::create($request->validated());

        return response()->json(
            $sewa->load('kendaraan'),
            201
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $sewa = Sewa::with('kategori', 'peminjamans')
            ->findOrFail($id);

        return response()->json($sewa, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $sewa = Sewa::findOrFail($id);

        $sewa->update($request->validated());

        return response()->json(
            $sewa->load('kendaraan'),
            200
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sewa = Sewa::findOrFail($id);
        $sewa->delete();

        return response()->json([
            'message' => 'Penyewaan berhasil dihapus'
        ], 200);
    }
}
