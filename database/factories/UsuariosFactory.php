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
            'nombre' => $this->faker->firstName(),
            'ap_pat' => $this->faker->lastName(),
            'ap_mat' => $this->faker->lastName(),
            'tipo' => $this->faker->randomElement(['admin', 'clientes','empleados']),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => bcrypt('password'), // Contraseña por defecto
            'remember_token' => \Str::random(10),
        ];
    }
}
