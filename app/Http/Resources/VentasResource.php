<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

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
                'fecha_venta' => $this->fecha,
            ],
        ];  
    }
}
