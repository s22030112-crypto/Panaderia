<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bitacora extends Model
{
    /** @use HasFactory<\Database\Factories\BitacoraFactory> */
    use HasFactory;

    protected $fillable = [ // Campos asignables
        'usu_nombre',
        'usu_ap_pat',
        'usu_ap_mat',
        'usu_tipo',
        'accion',
        'usuario',
        'fech_hora',
    ];

    // Aquí puedes definir relaciones y métodos adicionales
    public function usuarios()
    {
        return $this->belongsTo(User::class);
    }
}
