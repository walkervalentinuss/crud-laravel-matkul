<?php

use App\Http\Controllers\RuanganController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MatkulController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('dosen', DosenController::class);
Route::resource('ruangan', RuanganController::class);
Route::resource('matkul', MatkulController::class);