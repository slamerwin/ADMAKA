<?php

use App\Http\Controllers\ProdiController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProdiController::class, 'index'])->name('pro');
