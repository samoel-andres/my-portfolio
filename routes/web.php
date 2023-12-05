<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// home
Route::get('/', [HomeController::class, 'index'])->name('home.index');