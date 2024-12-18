<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\PemesananController;

Route::get('/beranda', function () {
    return view('landingpage.beranda');
});
Route::get('/layanan', function () {
    return view('landingpage.layanan');
});
Route::get('/tentang', function () {
    return view('landingpage.tentang');
});
Route::get('/harga', function () {
    return view('landingpage.harga');
});
Route::get('/jamkerja', function () {
    return view('landingpage.jamkerja');
});
Route::get('/testimoni', function () {
    return view('landingpage.testimoni');
});
route::resource('/pemesanan', PemesananController::class);
route::get('/sesi', [SessionController::class, 'index']);
route::get('/sesi/login', [SessionController::class, 'login']);

// Route::resource('')


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
