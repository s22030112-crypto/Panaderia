<?php

namespace App\Http\Controllers\Api;
use App\Http\Resources\MensajeResource; // Importar el recurso MensajeResource 

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mensaje; // Importar el modelo Mensaje
class MensajeController extends Controller
{
    // Muestra todas las mensaje
    public function index(){
        return Mensaje::all(); // Devuelve todas las mensaje
        //return new bitacoraCollection(mensaje::all());  // Devuelve todas las bitacoras como recurso API
    }

    // Muestra una mensaje a partir de su id
    public function show(Mensaje $mensaje){
        return $mensaje; // Devuelve la mensaje
        //$mensaje = $mensaje->load('recetas');  // Carga las recetas relacionadas con la mensaje
        //return new MensajeResource($mensaje);  // Devuelve la mensaje como recurso API 
    }
}
