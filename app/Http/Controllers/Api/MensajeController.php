<?php

namespace App\Http\Controllers\Api;
use App\Http\Resources\MensajeResource; // Importar el recurso MensajeResource 

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mensaje; // Importar el modelo Mensaje

class MensajeController extends Controller
{
    // Muestra todas las Mensaje
    public function index(){
        //return Mensaje::all(); // Devuelve todas las Mensaje
        return MensajeResource::collection(Mensaje::all()); // Devuelve todas las Mensaje como recurso API
    }

    // Muestra una Mensaje a partir de su id
    public function show(Mensaje $mensaje){
        //return $mensaje; // Devuelve la Mensaje
        return new MensajeResource($mensaje);  // Devuelve la Mensaje como recurso API
    }
    }