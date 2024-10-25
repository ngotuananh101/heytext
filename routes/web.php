<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/fonts/{slug}', [HomeController::class, 'fonts'])->name('fonts');
Route::get('/unicode', [HomeController::class, 'unicode'])->name('unicode');
