<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\PublicController;
use App\Http\Middleware\EnsureUserIsAdmin;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'home'])->name('home');
Route::get('/about', [PublicController::class, 'about'])->name('about');
Route::get('/peanuts', [PublicController::class, 'peanuts'])->name('peanuts.index');
Route::get('/homestays', [PublicController::class, 'homestays'])->name('homestays.index');
Route::get('/stories', [PublicController::class, 'stories'])->name('stories.index');
Route::get('/connect', [PublicController::class, 'connect'])->name('connect');

Route::middleware(['auth', EnsureUserIsAdmin::class])->prefix('admin')->group(function () {
    
    // Admin Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    // Marketplace Management
    Route::resource('/products', ProductController::class);
    
    
});

require __DIR__.'/auth.php';