<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FeedbackControllerController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', [HomeController::class, 'index'])->name('home.index');
    

    

