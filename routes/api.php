<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Importar controladores
use App\Http\Controllers\Api\ProductosController;
use App\Http\Controllers\Api\VentasController;
use App\Http\Controllers\Api\MensajeController;
use App\Http\Controllers\Api\BitacoraController;


// Rutas de productos 
Route::apiResource('productos', ProductosController::class);

// Rutas de ventas
Route::apiResource('ventas', VentasController::class);

// Rutas de etiquetas
Route::apiResource('mensaje', MensajeController::class);

//Rutas de Bitacora
Route::apiResource('bitacora', BitacoraController::class);