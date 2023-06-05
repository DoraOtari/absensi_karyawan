<?php

// catatan
// -Target class [KaryawanController] does not exist.
// +tambahkan use Controller sebelum digunakan

use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/dashboard', function(){
    return view('backend.dashboard');
});



Route::middleware(['auth'])->group(function(){
    // jabatan controller
    Route::controller(JabatanController::class)->group(function(){
        Route::get('/jabatan', 'index')->name('tampil jabatan');
        Route::get('/jabatan/create', 'create')->name('buat jabatan');
        Route::get('jabatan/{id}/edit', 'edit');
        Route::post('/jabatan', 'store');
        Route::delete('jabatan/{id}','hapus');
        Route::put('jabatan/{id}','update');
    });

    // user controller
    Route::controller(UserController::class)->group(function(){
        Route::get('profil/edit', 'edit');
        Route::patch('profil/{id}', 'update');
    });

    // karyawan
    Route::controller(KaryawanController::class)->group(function(){
        Route::get('karyawan', 'tampil');
        Route::get('karyawan/buat', 'buat');
        Route::post('/karyawan', 'simpan');
    });
});