<?php

use Illuminate\Support\Facades\Route;

// ==========================================
// MENU UTAMA (Beranda, Keuangan, Layanan, Suara Hati)
// ==========================================
Route::get('/', function () { return view('Home.home'); })->name('home');
Route::get('/keuangan', function () { return view('Home.keuangan'); })->name('keuangan');
Route::get('/layanan', function () { return view('Home.layanan'); })->name('layanan');
Route::get('/suarahati', function () { return view('Home.suarahati'); })->name('suarahati');

// ==========================================
// SUB-MENU PROFIL (Folder: resources/views/Home/profil)
// ==========================================
Route::prefix('profil')->name('profil.')->group(function () {
    Route::get('/sejarah', function () { return view('Home.profil.sejarah'); })->name('sejarah');
    Route::get('/visi-misi', function () { return view('Home.profil.visi-misi'); })->name('visi-misi');
    Route::get('/geografis', function () { return view('Home.profil.geografis'); })->name('geografis');
    Route::get('/demografis', function () { return view('Home.profil.demografis'); })->name('demografis');
});

// ==========================================
// SUB-MENU INFORMASI (Folder: resources/views/Home/informasi)
// ==========================================
Route::prefix('informasi')->name('informasi.')->group(function () {
    Route::get('/pengumuman', function () { return view('Home.informasi.pengumuman'); })->name('pengumuman');
    Route::get('/berita', function () { return view('Home.informasi.berita'); })->name('berita');
    Route::get('/agenda', function () { return view('Home.informasi.agenda'); })->name('agenda');
});