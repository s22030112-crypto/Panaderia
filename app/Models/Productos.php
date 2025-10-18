<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    /** @use HasFactory<\Database\Factories\ProductosFactory> */
    use HasFactory;
    protected $fillable = [ // Campos asignables
        'nombre_pro',
        'categoria',
        'precio',
        'cantidad',
    ];
public function ventas()
{
    return $this->belongsToMany(Ventas::class, 'productos_ventas', 'id_pro', 'id_venta');
}

}
