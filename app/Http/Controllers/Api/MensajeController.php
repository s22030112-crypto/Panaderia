<?php

namespace App\Http\Controllers\Api;
use App\Http\Resources\MensajeResource; // Importar el recurso MensajeResource 

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mensaje; // Importar el modelo Mensaje

class MensajeController extends Controller
{
    // Muestra todas las Productoss
    public function index(){
        return Productos::all(); // Devuelve todas las Productos
    }

    // Muestra una Productos a partir de su id
    public function show(Productos $producto){
        return $producto; // Devuelve la Productos
    }
    }