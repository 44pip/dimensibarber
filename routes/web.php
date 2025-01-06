<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Middleware\Authenticate;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PemesananController;

// Landing Page
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

// Route auth
Auth::routes();

// Route Admin
Route::middleware([Authenticate::class])->group(function () {
    route::resource('dashboard', DashboardController::class);
    route::resource('pemesanan', PemesananController::class);
});

// Logout
Route::get('logout', function () {
    Auth::logout();
    return redirect('login');
});