<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\VentasResource;


class ProductosResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'tipo' => 'productos',
            'atributos' => [
                'Nombre del producto'    => $this->nombre_pro,
                'categoria' => $this->categoria,    
                'precio'     => $this->precio,
                'cantidad'  => $this->cantidad,
            ],
            'relaciones' => [
                'ventas' => $this->whenLoaded('ventas', function () {// Carga las ventas relacionadas con el producto
                    return VentasResource::collection($this->ventas);// Usa el recurso VentasResource para formatear las ventas relacionadas
                }),
            ],
        ];
    }
}