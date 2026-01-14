<?php

use App\Http\Controllers\PlayerApiController;
use Illuminate\Support\Facades\Route;

// Forma corta: crea automáticamente 5 rutas API (sin create y edit)
Route::get('/player', [PlayerApiController::class, "list"]);

Route::get('/hello', function () {
    return "hello world";
});
