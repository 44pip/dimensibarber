<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $layanan = Layanan::paginate(10);
        return view('admin.layanan', compact('layanan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.form.CreateLayanan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'jenis' => 'required|string|max:100',
            'deskripsi' => 'required|string|max:500',
            'harga' => 'required|numeric|min:0|max:99999999.99',
        ]);

        // Simpan ke database
        Layanan::create([
            'jenis' => $request->jenis,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
        ]);

        return redirect()->route('layanan.index')->with('success', 'Layanan berhasil ditambahkan!');
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
        $layanan = Layanan::findOrFail($id); // Cari data layanan berdasarkan ID
        return view('admin.form.UpdateLayanan', compact('layanan')); // Tampilkan form edit
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'jenis' => 'required|string|max:255', // Validasi untuk jenis
            'deskripsi' => 'required|string', // Validasi untuk deskripsi
            'harga' => 'required|numeric|min:0', // Validasi untuk harga
        ]);

        $layanan = Layanan::findOrFail($id); // Cari data layanan berdasarkan ID
        $layanan->update($request->all()); // Update data layanan dengan data dari request

        return redirect()->route('layanan.index')->with('success', 'Layanan berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $layanan = Layanan::findOrFail($id); // Cari data layanan berdasarkan ID
        $layanan->delete(); // Hapus data layanan

        return redirect()->route('layanan.index')->with('success', 'Layanan berhasil dihapus!');
    }
}
