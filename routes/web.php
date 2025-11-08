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

Route::delete('/orders/{order}', [OrderController::class, 'destroy'])->name('orders.destroy');


Route::get('/feedback', [FeedbackControllerController::class, 'create'])->name('feedback.create');
Route::post('/feedback', [FeedbackControllerController::class, 'store'])->name('feedback.store');


Route::prefix('admin')->group(function () {
    
    Route::get('/', [ProductController::class, 'index'])->name('home.admin');
    
    
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    Route::post('/products', [ProductController::class, 'store'])->name('products.store');
    Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
    Route::delete('/delete/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
});