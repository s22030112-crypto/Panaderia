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
        //return Bitacora::all(); // Devuelve todas las bitacora
        return BitacoraResource::collection(Bitacora::all()); // Devuelve todas las bitacora como recurso API
    }

    // Muestra una bitacora a partir de su id
    public function show(Bitacora $bitacora){
        //return $bitacora; // Devuelve la bitacora
        return new BitacoraResource($bitacora);  // Devuelve la bitacora como recurso API
    }
}
