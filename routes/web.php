<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::middleware('auth')->group(function () {
    Route::middleware('role:mahasiswa')->group(function () {
        require 'web/mahasiswa.php';
    });

    Route::middleware('role:administrator')->group(function () {
        require 'web/administrasi.php';
    });

    Route::middleware('role:jurusan')->group(function () {
        require 'web/jurusan.php';
    });

    Route::middleware('role:ketua prodi')->group(function () {
        require 'web/prodi.php';
    });
});

require 'web/come.php';
require 'web/auth.php';
