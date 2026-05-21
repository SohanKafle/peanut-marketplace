<?php

use App\Http\Controllers\PublicSide\MarketplaceController;
use Illuminate\Support\Facades\Route;

// Public Routes
Route::get("/", [MarketplaceController::class, "home"])->name("home");
Route::get("/marketplace", [MarketplaceController::class, "index"])->name("marketplace.index");
Route::get("/marketplace/product/{product:slug}", [MarketplaceController::class, "show"])->name("marketplace.show");
Route::get("/dashboard", function () {
    return view("dashboard");
})->middleware(["auth"])->name("dashboard");

// Admin Routes (To be protected by auth middleware later)
Route::prefix("admin")->name("admin.")->group(function () {
    Route::resource("products", App\Http\Controllers\Admin\ProductController::class);
    Route::resource("farmers", App\Http\Controllers\Admin\FarmerController::class);

});

require __DIR__.'/auth.php';