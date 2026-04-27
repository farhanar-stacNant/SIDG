<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes - SIDG Desa Gondowangi
|--------------------------------------------------------------------------
*/

// Group Utama untuk folder Home
Route::group([], function () {
    
    // Halaman Utama di dalam folder Home
    Route::get('/', function () { return view('Home.home'); })->name('home');
    Route::get('/keuangan', function () { return view('Home.keuangan'); })->name('keuangan');
    Route::get('/layanan', function () { return view('Home.layanan'); })->name('layanan');
    Route::get('/suarahati', function () { return view('Home.suarahati'); })->name('suarahati');

    // Folder profil di dalam folder Home (Home/profil/...)
    Route::prefix('profil')->name('profil.')->group(function () {
        Route::get('/sejarah', function () { return view('Home.profil.sejarah'); })->name('sejarah');
        Route::get('/visi-misi', function () { return view('Home.profil.visi-misi'); })->name('visi-misi');
        Route::get('/geografis', function () { return view('Home.profil.geografis'); })->name('geografis');
        Route::get('/demografis', function () { return view('Home.profil.demografis'); })->name('demografis');
    });

    // Folder Informasi di dalam folder Home (Home/Informasi/...)
    Route::prefix('informasi')->name('informasi.')->group(function () {
        Route::get('/pengumuman', function () { return view('Home.Informasi.Pengumuman'); })->name('pengumuman');
        Route::get('/berita', function () { return view('Home.Informasi.BeritaTerkini'); })->name('berita');
        Route::get('/agenda', function () { return view('Home.Informasi.Agenda-kegiatan'); })->name('agenda');
    });
});