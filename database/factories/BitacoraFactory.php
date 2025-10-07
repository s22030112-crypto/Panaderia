<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bitacora>
 */
class BitacoraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // Define los campos de la bitácora aquí
            'usu_nombre' => $this->faker->firstName(),
            'usu_ap_pat' => $this->faker->lastName(),
            'usu_ap_mat' => $this->faker->lastName(),
            'usu_tipo' => $this->faker->randomElement(['admin', 'user']),
            'accion' => $this->faker->sentence(),
            'usuario' => $this->faker->userName(),
            'fech_hora' => $this->faker->dateTime(),
        ];
    }
}
