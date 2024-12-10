<?php

use App\Http\Controllers\RuanganController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MatkulController;
use App\Http\Controllers\AuthManualController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('manual-auth.login');
});

Route::middleware(['auth'])->group(function(){
    Route::resource('dosen', DosenController::class);
    Route::resource('ruangan', RuanganController::class);
    Route::resource('matkul', MatkulController::class);
});

// Route untuk login dan logout
Route::get('/login', [AuthManualController::class, 'index'])->name('login');
Route::post('/login', [AuthManualController::class, 'loginProcess'])->name('loginProcess');
Route::post('/logout', [AuthManualController::class, 'logout'])->name('logout');