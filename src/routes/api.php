<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\EventoController;
use App\Http\Controllers\AsistenteController;

Route::get('/eventos', [EventoController::class, 'index']);

Route::get('/asistentes', [AsistenteController::class, 'index']);


Route::middleware('auth:api')->group(function () {
    Route::post('/eventos', [EventoController::class, 'store']);
    Route::post('/asistentes', [AsistenteController::class, 'store']);
});




