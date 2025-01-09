<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    public function __construct()
    {
        // Terapkan middleware auth ke method tertentu
        $this->middleware('auth')->only(['index', 'destroy']);
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimoni = Testimoni::paginate(10);
        return view('admin.testimoni', compact('testimoni'));
    }

    /**
     * Display a listing of the resource.
     */
    public function customer()
    {
        $testimoni = Testimoni::paginate(10);
        return view('layout.navbar', compact('testimoni'));
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
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'komentar' => 'required|string',
            'waktu_dan_tanggal' => 'required|date',
        ]);

        // Simpan data ke database
        Testimoni::create([
            'nama' => $request->nama,
            'komentar' => $request->komentar,
            'waktu_dan_tanggal' => $request->waktu_dan_tanggal,
        ]);

        // Redirect ke halaman tertentu dengan pesan sukses
        return redirect()->route('testimoni.customer')->with('success', 'Testimoni berhasil dikirim!');
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
        $testimoni = Testimoni::findOrFail($id); // Cari data testimoni berdasarkan ID
        $testimoni->delete(); // Hapus data testimoni

        return redirect()->route('testimoni.index')->with('success', 'Testimoni berhasil dihapus!');
    }
}
