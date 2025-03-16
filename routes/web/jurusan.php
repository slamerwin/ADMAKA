<?php

use App\Http\Controllers\JurusanController;
use Illuminate\Support\Facades\Route;

Route::get('/', [JurusanController::class, 'index'])->name('jur');