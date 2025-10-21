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
        //return Ventas::all(); // Devuelve todas las ventas
        //return VentasResource::collection(Ventas::all()); // Devuelve todas las ventas como recurso API
        $ventas = Ventas::with('productos')->get(); // Carga las ventas con sus productos relacionados
        return VentasResource::collection($ventas); // Devuelve todas las ventas como recurso API
    }

    // Muestra una venta a partir de su id
    public function show(Ventas $venta){
        $venta= $venta->load('productos','usuarios'); // Carga la relación con los productos
        return new VentasResource($venta);  // Devuelve la venta como recurso API
        //return $venta; // Devuelve la venta
    }
}
