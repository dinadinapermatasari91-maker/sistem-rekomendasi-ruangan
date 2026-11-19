<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\RekomendasiController;

// Halaman utama
Route::get('/', [DashboardController::class, 'index']);

// Daftar ruangan
Route::get('/ruangan', [RuanganController::class, 'index']);

// Detail ruangan berdasarkan ID
Route::get('/ruangan/{id}', [RuanganController::class, 'detail']);

// Form rekomendasi
Route::get('/rekomendasi', function () {
    return view('rekomendasi.form');
});

// Proses dan hasil rekomendasi
Route::get('/hasil-rekomendasi', [RekomendasiController::class, 'index']);

// Halaman informasi
Route::get('/tentang', function () {
    return view('tentang');
});

// Halaman jadwal
Route::get('/jadwal', function () {
    return view('jadwal');
});

// Detail ruangan dengan parameter ID alternatif
Route::get('/detail-ruangan/{id}', [RuanganController::class, 'detail']);