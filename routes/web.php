<?php

use Illuminate\Support\Facades\Route; // Solo una vez es suficiente
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\SucursalController;

// Tus recursos
Route::resource('productos', ProductoController::class);
Route::resource('sucursals', SucursalController::class);

// Tu ruta principal
Route::get('/', function () {
    return view('home');
});
