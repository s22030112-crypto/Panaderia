<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\VentasResource; // Importar el recurso VentasResource 
use App\Models\Ventas; // Importar el modelo Ventas
class VentasController extends Controller
{
    // Muestra todas las ventas
    public function index(){
        return Ventas::all(); // Devuelve todas las ventas
    }

    // Muestra una venta a partir de su id
    public function show(Ventas $venta){
        return $venta; // Devuelve la venta
    }
}
