<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\EntregaController;

Route::get('/Ola', function () {
    return 'Ola, LogisExpress';
});

Route::get('/welcome', [HomeController::class, 'index']);

Route::get('/sobre', [PaginaController::class, 'sobre']);

Route::get('/entregas', [EntregaController::class, 'index']);