<?php
use App\Http\Controllers\BookController;
Route::get('/books', [BookController::class, 'index']);
Route::post('/books', [BookController::class, 'store']);