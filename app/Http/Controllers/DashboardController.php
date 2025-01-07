<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use App\Models\Pemesanan;
use App\Models\Testimoni;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Pencarian dan Pagination untuk tabel Layanan
        $layanan = Layanan::query();
        if ($request->has('search_layanan') && $request->search_layanan !== null) {
            $layanan->where('jenis', 'like', '%' . $request->search_layanan . '%')
                ->orWhere('deskripsi', 'like', '%' . $request->search_layanan . '%');
        }
        $layanan = $layanan->paginate(10);  // Pagination 10 item per halaman

        // Pencarian dan Pagination untuk tabel Pemesanan
        $pemesanan = Pemesanan::query();
        if ($request->has('search_pemesanan') && $request->search_pemesanan !== null) {
            $pemesanan->where('nama', 'like', '%' . $request->search_pemesanan . '%')
                ->orWhere('no_hp', 'like', '%' . $request->search_pemesanan . '%');
        }
        $pemesanan = $pemesanan->paginate(10);

        // Pencarian dan Pagination untuk tabel Testimoni
        $testimoni = Testimoni::query();
        if ($request->has('search_testimoni') && $request->search_testimoni !== null) {
            $testimoni->where('nama', 'like', '%' . $request->search_testimoni . '%')
                ->orWhere('komentar', 'like', '%' . $request->search_testimoni . '%');
        }
        $testimoni = $testimoni->paginate(10);

        return view('admin.dashboard', [
            'layanan' => $layanan,
            'pemesanan' => $pemesanan,
            'testimoni' => $testimoni,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
