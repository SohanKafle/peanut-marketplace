<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\HomestayController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\StoryController;
use App\Http\Controllers\PublicController;
use App\Http\Middleware\EnsureUserIsAdmin;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'home'])->name('home');
Route::get('/about', [PublicController::class, 'about'])->name('about');
Route::get('/peanuts', [PublicController::class, 'peanuts'])->name('peanuts.index');
Route::get('/homestays', [PublicController::class, 'homestays'])->name('homestays.index');
Route::get('/stories', [PublicController::class, 'stories'])->name('stories.index');
Route::get('/stories/{id}', [PublicController::class, 'show'])->name('stories.show');
Route::get('/connect', [PublicController::class, 'connect'])->name('connect');

Route::middleware(['auth', EnsureUserIsAdmin::class])->prefix('admin')->name('admin.')->group(function () {

    // Dashboard Route
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Product Routes
    Route::resource('products', ProductController::class)->only(['index', 'create', 'store', 'edit', 'update', 'destroy']);

    // Story Routes
    Route::resource('stories', StoryController::class)->only(['index', 'create', 'store', 'edit', 'update', 'destroy']);

    // Homestay Routes
    Route::resource('homestays', HomestayController::class)->only(['index', 'create', 'store', 'edit', 'update', 'destroy']);
});

require __DIR__ . '/auth.php';
