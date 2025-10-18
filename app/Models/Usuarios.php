<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    /** @use HasFactory<\Database\Factories\UsuariosFactory> */
    use HasFactory;
    protected $fillable = [ // Campos asignables
        'usu_nombre',
        'usu_ap_pat',
        'usu_ap_mat',
        'usu_correo',
        'usu_cont',
        'usu_direc',
        'usu_sexo',
        'usu_tipo',
    ];
    // Aquí puedes definir relaciones y métodos adicionales
    public function ventas()
    {
        return $this->hasMany(Ventas::class, 'id_usuario');
    }
    public function mensajes()
    {
        return $this->hasMany(Mensaje::class, 'id_usuario');
    }
    public function bitacoras()
    {
        return $this->hasMany(Bitacora::class, 'usuario', 'usu_nombre');
    }
}
