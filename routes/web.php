<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/app', function () {
    return 'Hola desde /app';
});

Route::get('/metric', function () {
    return 'OK desde /metric';
});
