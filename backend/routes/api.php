<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Middleware\CorsMiddleware;

// Aplicar CORS a todas las rutas
Route::middleware([CorsMiddleware::class])->group(function () {
    // Ruta para obtener el usuario autenticado
    Route::get('/user', function (Request $request) {
        return $request->user();
    })->middleware('auth:sanctum');

    // Ruta para obtener todas las publicaciones
    Route::get('/books', [BookController::class, 'index']);

    // Ruta para almacenar nuevas publicaciones
    Route::post('/books', [BookController::class, 'store']);

    // Ruta para buscar publicaciones por título
    Route::get('/books/search', [BookController::class, 'search']); // Método GET
});