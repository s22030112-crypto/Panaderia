<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BitacoraResource extends JsonResource
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
            'tipo' => 'bitacora',
            'atributos' => [
                'Nombre de usuario'=> $this->usu_nombre,
                'Apellido paterno'=> $this->usu_ap_pat,
                'Apellido materno'=> $this->usu_ap_mat,
                'Tipo de usuario'=> $this->usu_tipo,
                'Accion'=> $this->accion,
                'Usuario'=> $this->usuario,
                'Fecha y hora'=> $this->fech_hora,
            ],
        ];
    }
}
