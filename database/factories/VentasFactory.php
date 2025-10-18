<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ventas>
 */
class VentasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // Define los campos de la venta aquí
            
            'id_usuario' => $this->faker->numberBetween(1, 15),
            'total' => $this->faker->randomFloat(5, 50, 500),
            'fecha' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
