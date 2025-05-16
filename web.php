<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\JenisKelaminController; // Tambahkan ini

Route::resource('siswas', SiswaController::class);
Route::resource('jenis-kelamin', JenisKelaminController::class);

Route::get('/', function () {
    return view('welcome');
});
