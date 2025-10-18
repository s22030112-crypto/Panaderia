<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
    /** @use HasFactory<\Database\Factories\MensajeFactory> */
    use HasFactory;

    protected $fillable = [ // Campos asignables
        'id_usuario',
        'email',
        'mensaj',
    ];
    // Aquí puedes definir relaciones y métodos adicionales
    public function usuario()
    {
        return $this->belongsTo(Usuarios::class, 'id_usuario');
    }
}
