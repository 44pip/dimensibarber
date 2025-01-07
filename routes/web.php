<?php

use App\Models\Testimoni;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LayananController;
use Illuminate\Auth\Middleware\Authenticate;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\TestimoniController;

// Landing Page
Route::get('/beranda', function () {
    return view('landingpage.beranda');
});

Route::get('/layanan', function () {
    return view('landingpage.layanan');
});
Route::get('/pemesanan/create', [PemesananController::class, 'create'])->name('pemesanan.create');
Route::post('/pemesanan', [PemesananController::class, 'store'])->name('pemesanan.store');
Route::get('/pemesanan/{id}', [PemesananController::class, 'show'])->name('pemesanan.show');
Route::get('/get-booked-times', [PemesananController::class, 'getBookedTimes']); // Route untuk mengambil waktu yang sudah dipesan

Route::get('/tentang', function () {
    return view('landingpage.tentang');
});

Route::get('/harga', function () {
    return view('landingpage.harga');
});

Route::get('/jamkerja', function () {
    return view('landingpage.jamkerja');
});

Route::get('/testimoni', [TestimoniController::class, 'customer'])->name('testimoni.customer');
Route::post('/testimoni', [TestimoniController::class, 'store'])->name('testimoni.store');


// Route auth
Auth::routes();

// Route Admin
Route::prefix('admin')->middleware([Authenticate::class])->group(function () {
    Route::resource('dashboard', DashboardController::class);
    Route::resource('layanan', LayananController::class);
    Route::get('/pemesanan', [PemesananController::class, 'index'])->name('pemesanan.index');
    Route::get('/pemesanan/{id}/edit', [PemesananController::class, 'edit'])->name('pemesanan.edit');
    Route::put('/pemesanan/{id}', [PemesananController::class, 'update'])->name('pemesanan.update');
    Route::delete('/pemesanan/{id}', [PemesananController::class, 'destroy'])->name('pemesanan.destroy');
    Route::get('/testimoni', [TestimoniController::class, 'index'])->name('testimoni.index');
    Route::delete('/testimoni/{id}', [TestimoniController::class, 'destroy'])->name('testimoni.destroy');
});

// Logout
Route::get('logout', function () {
    Auth::logout();
    return redirect('login');
});
