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
        //return new VentasCollection(Ventas::all());  // Devuelve todas las ventas como recurso API
    }

    // Muestra una venta a partir de su id
    public function show(Ventas $venta){
        return $venta; // Devuelve la venta
        //$venta = $venta->load('recetas');  // Carga las recetas relacionadas con la venta
        //return new VentasResource($venta);  // Devuelve la venta como recurso API 
    }
}
