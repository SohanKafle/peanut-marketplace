<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'home'])->name('home');
Route::get('/about', [PublicController::class, 'about'])->name('about');
Route::get('/peanuts', [PublicController::class, 'peanuts'])->name('peanuts.index');
Route::get('/homestays', [PublicController::class, 'homestays'])->name('homestays.index');
Route::get('/stories', [PublicController::class, 'stories'])->name('stories.index');
Route::get('/connect', [PublicController::class, 'connect'])->name('connect');

// Admin Routes (To be protected by auth middleware later)
Route::prefix("admin")->name("admin.")->group(function () {
    Route::resource("products", App\Http\Controllers\Admin\ProductController::class);
    Route::resource("farmers", App\Http\Controllers\Admin\FarmerController::class);

});

require __DIR__.'/auth.php';