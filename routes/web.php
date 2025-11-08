<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\FeedbackControllerController;

Route::get('/', function () {
    return view('home');
});

Route::get('/index', [HomeController::class, 'index'])->name('home.index');
Route::get('/about', [HomeController::class, 'about'])->name('home.about');
Route::get('/order', [OrderController::class, 'index'])->name('home.order');

// Feedback routes
Route::get('/feedback', [FeedbackControllerController::class, 'create'])->name('feedback.create');
Route::post('/feedback', [FeedbackControllerController::class, 'store'])->name('feedback.store');

// Admin routes - consolidated under prefix
Route::prefix('admin')->group(function () {
    // Main admin dashboard
    Route::get('/', [ProductController::class, 'index'])->name('home.admin');
    
    // Product management routes
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    Route::post('/products', [ProductController::class, 'store'])->name('products.store');
    Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
    Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
});