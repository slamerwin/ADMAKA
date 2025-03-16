<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/proses-login', [AuthController::class, 'prosesLogin'])->name('proses-login');
