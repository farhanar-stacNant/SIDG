<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home.home'); 
})->name('home');

Route::get('/profil/{slug}', function ($slug) { return view('Home.profil.' . $slug); })->name('profil');
Route::get('/layanan', function () { return view('Home.layanan'); })->name('layanan');
Route::get('/informasi/{page}', function ($page) { return view('Home.informasi.' . $page); })->name('informasi');
Route::get('/keuangan', function () { return view('Home.keuangan'); })->name('keuangan');
Route::get('/suarahati', function () { return view('Home.suarahati'); })->name('suarahati');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
