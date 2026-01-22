<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/users', function () {
    return 'User List';
});
Route::post('/users', function () {
    return 'User List';
});
