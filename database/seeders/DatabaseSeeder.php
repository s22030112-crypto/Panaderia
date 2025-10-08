<?php

namespace Database\Seeders;
use Illuminate\Database\Eloquent\Factories\Factory; // importar la clase Factory
use Illuminate\Support\Facades\Hash; // Para hashear contraseñas
use Illuminate\Support\Str; // Para generar cadenas aleatorias

use App\Models\User;// importar el modelo user
use App\Models\Usuarios; // importar el modelo Usuarios
use App\Models\Ventas; // importar el modelo Ventas
use App\Models\Productos; // importar el modelo Productos
use App\Models\Mensaje; // importar el modelo Mensaje
use App\Models\Bitacora; // importar el modelo Bitacora

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Usuarios::factory()->create([
            'usu_nombre' => 'Mario',
            'usu_ap_pat' => 'Base',
            'usu_ap_mat' => 'Datos',
            'usu_correo' => 'mariodb404@gmail.com',
            'usu_cont' => Hash::make('mariodb404'), // Hashear la contraseña
            'usu_direc' => 'Calle Falsa 123',
            'usu_sexo' => 'M',
            'usu_tipo' => 'admin',
            
        ]);
        Usuarios::factory(15)->create();

        Ventas::factory(20)->create();
        Productos::factory(50)->create();
        Mensaje::factory(10)->create();
        Bitacora::factory(100)->create();

        // Relación muchos a muchos
        $producto = Productos::all();
        $venta = Ventas::all();

        // asignar productos a ventas de forma aleatoria
        // attach() agrega registros a la tabla intermedia sin eliminar los existentes 
        foreach ($venta as $ventas) {
            $ventas->producto()->attach($producto->random(rand(2, 4)));
        }
    }
}
