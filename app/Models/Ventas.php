<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ventas extends Model
{
    /** @use HasFactory<\Database\Factories\VentasFactory> */
    use HasFactory;
public function producto()
{
    return $this->belongsToMany(Productos::class, 'productos_ventas', 'id_venta', 'id_pro');
}
}
