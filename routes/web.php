<?php

use Illuminate\Support\Facades\Route;

// Grouping untuk file yang ada di folder resources/views/Home
Route::get('/', function () { return view('Home.home'); })->name('home');
Route::get('/keuangan', function () { return view('Home.keuangan'); })->name('keuangan');
Route::get('/layanan', function () { return view('Home.layanan'); })->name('layanan');
Route::get('/suarahati', function () { return view('Home.suarahati'); })->name('suarahati');

// Grouping untuk file yang ada di folder resources/views/profile
Route::prefix('profil')->group(function () {
    Route::get('/sejarah', function () { return view('profile.sejarah'); })->name('sejarah');
    Route::get('/visi-misi', function () { return view('profile.visi-misi'); })->name('visi-misi');
    Route::get('/geografis', function () { return view('profile.geografis'); })->name('geografis');
    Route::get('/demografis', function () { return view('profile.demografis'); })->name('demografis');
});

// Grouping untuk file Informasi (Buat folder 'informasi' di dalam views jika belum ada)
Route::prefix('informasi')->group(function () {
    Route::get('/pengumuman', function () { return view('informasi.pengumuman'); })->name('pengumuman');
    Route::get('/berita', function () { return view('informasi.berita'); })->name('berita');
    Route::get('/agenda', function () { return view('informasi.agenda'); })->name('agenda');
});