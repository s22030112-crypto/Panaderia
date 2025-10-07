<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Productos>
 */
class ProductosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // Define los campos del producto aquí
            'nombre_pro' => $this->faker->word(),
            'categoria' => $this->faker->randomElement(['pan de temporada', 'pan salado', 'pan dulce', 'pan grande']),
            'precio' => $this->faker->randomFloat(5, 6, 17),
            'cantidad' => $this->faker->numberBetween(1, 100),
        ];
    }
}
