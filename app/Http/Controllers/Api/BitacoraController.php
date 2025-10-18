<?php

namespace App\Http\Controllers\Api;
use App\Http\Resources\BitacoraResource; // Importar el recurso BitacoraResource 

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bitacora; // Importar el modelo Bitacora
class BitacoraController extends Controller
{
    // Muestra todas las bitacora
    public function index(){
        return Bitacora::all(); // Devuelve todas las bitacora
        //return new bitacoraCollection(bitacora::all());  // Devuelve todas las bitacoras como recurso API
    }

    // Muestra una bitacora a partir de su id
    public function show(Bitacora $bitacora){
        return $bitacora; // Devuelve la bitacora
        //$bitacora = $bitacora->load('recetas');  // Carga las recetas relacionadas con la bitacora
        //return new bitacoraResource($bitacora);  // Devuelve la bitacora como recurso API 
    }
}
