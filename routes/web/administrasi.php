<?php

use App\Http\Controllers\AdministrasiController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AdministrasiController::class, 'index'])->name('admin');