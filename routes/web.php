<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PublisherController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::resource('books', BookController::class);
Route::resource('categories', CategoryController::class);
Route::resource('publishers', PublisherController::class);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
