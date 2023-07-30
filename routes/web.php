<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;



Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/book/{id}', [MainController::class, 'details'])->name('details');
Route::get('/search', [BookController::class,'index'])->name('book.index');
Route::get('/reviews' , [ReviewController::class, 'reviews'])->name('reviews');
Route::get('/messages' , [ReviewController::class, 'allMessages'])->name('messages');
Route::post('/review/submit' , [ReviewController::class, 'reviews_submit'])->name('reviews_submit');
require __DIR__.'/auth.php';
