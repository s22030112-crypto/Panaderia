<?php

namespace App\Http\Controllers\Api;
use App\Http\Resources\ProductosResource; // Importar el recurso ProductosResource 
use App\Http\Requests\StoreProductosRequest;  // Importar la request StoreProductosRequest
use App\Http\Requests\UpdateProductosRequest; // Importar la request UpdateProductosRequest
use Symfony\Component\HttpFoundation\Response; // Importar la clase Response para los códigos de estado HTTP
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Productos;// Importar el modelo Productos

class ProductosController extends Controller
{
    // Muestra todas las Productoss
    public function index(){
        //return Productos::all(); // Devuelve todas las Productos
        //return ProductosResource::collection(Productos::all()); // Devuelve todas las Productos como recurso API
        $productos= Productos::with('ventas')->get(); // Carga las ventas relacionadas con cada producto
        return ProductosResource::collection($productos); // Devuelve todas las Productos como recurso API con
    }

    // Muestra una Productos a partir de su id
    public function show(Productos $producto){
        //return $producto; // Devuelve la Productos
        $Producto= $producto->load('ventas'); // Carga la relación con las ventas
        return new ProductosResource($producto);  // Devuelve la Productos como recurso API
    }

    // Almacena una nueva Productos 
    public function store(StoreProductosRequest $request){
        $producto = Productos::create($request->validated());// Crear un nuevo Productos con los datos validados
        $producto->ventas()->sync($request->input('ventas', [])); // Sincronizar las ventas relacionadas si se proporcionan
        return response()->json(new ProductosResource($producto), Response::HTTP_CREATED); // Devolver la nueva Productos como recurso API con código de estado 201 (creado)
    }

    // Actualiza una Productos existente
    public function update(UpdateProductosRequest $request, Productos $producto){
        $producto->update($request->validated()); // Actualizar la Productos con los datos validados

        return response()->json(new ProductosResource($producto), Response::HTTP_ACCEPTED); // Devolver la Productos actualizada como recurso API con código de estado 202 (aceptado)
    }

    // Elimina una Productos existente
    public function destroy(Productos $Producto){  // Inyectar el Productos a eliminar
        $Producto->delete();  // Eliminar el Productos

        // Devolver una respuesta vacía con código de estado 204 (No Content)
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}