<?php

namespace App\Http\Controllers\Api;
use App\Http\Resources\ProductosResource; // Importar el recurso ProductosResource 

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Productos;

class ProductosController extends Controller
{
    // Muestra todas las etiquetas
    public function index(){
        return Productos::all(); // Devuelve todas las etiquetas
        // return Productos::with('recetas')->get(); // Carga las recetas asociadas a la etiqueta
        // return EtiquetaResource::collection(Productos::with('recetas')->get()); // Devuelve todas las etiquetas como recurso API

        //$etiquetas = Productos::with('recetas.categoria', 'recetas.etiquetas', 'recetas.user')->get();  // Carga las relaciones anidadas: categoria, etiquetas y user de las recetas 
        //return EtiquetaResource::collection($etiquetas);  // Devuelve todas las etiquetas como recurso API con relaciones anidadas
    }

    // Muestra una etiqueta a partir de su id
    public function show(Productos $etiqueta){ 
        return $etiqueta; // Devuelve la etiqueta
        // return $etiqueta->load('recetas'); // Carga las recetas asociadas a la etiqueta
        // return new EtiquetaResource($etiqueta->load('recetas')); // Devuelve la etiqueta como recurso API 

        //$etiqueta = $etiqueta->load('recetas.categoria', 'recetas.etiquetas', 'recetas.user');  // Carga las relaciones anidadas: categoria, etiquetas y user de las recetas
        //return new EtiquetaResource($etiqueta); // Devuelve la etiqueta como recurso API con relaciones anidadas
    }
}
