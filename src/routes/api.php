<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\EventoController;

Route::get('/eventos', [EventoController::class, 'index']);
// Route::post('/users', function () {
//     return 'User List';
// });
