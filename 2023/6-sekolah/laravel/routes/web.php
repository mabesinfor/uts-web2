<?php

use App\Http\Controllers\GuruController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::resource('siswa', SiswaController::class);
Route::resource('guru', GuruController::class);
Route::resource('nilai', NilaiController::class);