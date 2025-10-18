<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductosResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [  // Estructuramos la respuesta de la productos como recurso API
            'id' => $this->id,
            'tipo' => 'productos',
            'atributos' => [  // Estructuramos los atributos de la productos
                'nombre del producto' => $this->nombre_pro,
                'Categoria' => $this->categoria,
                'Precioo' => $this->precio,
                'Cantidad' => $this->cantidad,
            ],
            'relaciones' => [  // Estructuramos las relaciones de la productos
                //'recetas' => $this->recetas
                 'Ventas' => VentasResource::collection($this->ventas)  // Usamos el recurso RecetasResource para formatear las recetas relacionadas
            ],
        ];

    }
}