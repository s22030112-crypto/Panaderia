<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\ProductosResource;

class VentasResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [  // Estructuramos la respuesta de la ventas como recurso API
            'id' => $this->id,
            'tipo' => 'ventas',
            'atributos' => [
                'id de Usuario' => $this->id_usuario,                
                'total' => $this->total,
                'fecha de venta' => $this->fecha,
            ],
            'relationships' => [
                'productos' => $this->whenLoaded('productos', function () {// Carga los productos relacionados con la venta
                    return ProductosResource::collection($this->productos);// Usa el recurso ProductosResource para formatear los productos relacionados
                }),
            ],
        ];  
    }
}
