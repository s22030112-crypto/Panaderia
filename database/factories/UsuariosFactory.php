<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuarios>
 */
class UsuariosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // Define los campos del usuario aquí
            'usu_nombre' => $this->faker->firstName(),
            'usu_ap_pat' => $this->faker->lastName(),
            'usu_ap_mat' => $this->faker->lastName(),           
            'usu_correo' => $this->faker->unique()->safeEmail(),
            'usu_cont' => bcrypt('password'), // Contraseña por defecto
            'usu_direc' => $this->faker->address(),
            'usu_sexo' => $this->faker->randomElement(['M', 'F']),
             'usu_tipo' => $this->faker->randomElement(['admin', 'cliente','empleado']),
        ];
    }
}
