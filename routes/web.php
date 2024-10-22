<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::group([
    'middleware' => 'sidebarData'
], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home.index');
    Route::get('/style/{slug}', [HomeController::class, 'style'])->name('style.show');
});
