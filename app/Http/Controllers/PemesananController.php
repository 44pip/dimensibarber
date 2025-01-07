<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Layanan;
use App\Models\Pemesanan;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    public function __construct()
    {
        // Terapkan middleware auth ke method tertentu
        $this->middleware('auth')->only(['index', 'edit', 'update', 'destroy']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pemesanan = Pemesanan::paginate(10);
        return view('admin.pemesanan', compact('pemesanan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customer.pemesanan');
    }

    /**
     * Ambil waktu yang sudah dipesan pada tanggal tertentu.
     */
    public function getBookedTimes(Request $request)
    {
        $tanggal = $request->query('tanggal'); // Ambil tanggal dari query parameter

        // Ambil waktu yang sudah dipesan pada tanggal tersebut
        $bookedTimes = Pemesanan::where('tanggal', $tanggal)
            ->pluck('waktu')
            ->toArray();

        return response()->json(['bookedTimes' => $bookedTimes]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'nohp' => 'required|string|max:15',
            'tanggal' => 'required|date|after_or_equal:today',
            'waktu' => 'required|string',
            'deskripsi' => 'nullable|string',
        ]);

        // Simpan data ke database
        Pemesanan::create([
            'nama' => $request->nama,
            'no_hp' => $request->nohp,
            'tanggal' => $request->tanggal,
            'waktu' => $request->waktu,
            'catatan' => $request->deskripsi,
            'status' => 'Belum',
        ]);

        // Redirect ke halaman tertentu dengan pesan sukses
        return redirect()->route('pemesanan.create')->with('success', 'Pemesanan berhasil dikirim!');
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
        // Validasi input
        $request->validate([
            'status' => 'required|in:Done,Belum', // Pastikan status hanya 'Done' atau 'Belum'
        ]);

        // Update status di database
        $pemesanan = Pemesanan::findOrFail($id);
        $pemesanan->status = $request->status;
        $pemesanan->save();

        // Redirect kembali ke halaman yang sama dengan pesan sukses
        return redirect()->back()->with('success', 'Status berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
