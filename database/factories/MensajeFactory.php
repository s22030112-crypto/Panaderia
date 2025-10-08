<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mensaje>
 */
class MensajeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // Define los campos del mensaje aquí$table->id();
            'id_usuario' => $this->faker->numberBetween(1, 15),
            'email' => $this->faker->unique()->safeEmail(),
            'mensaj' => $this->faker->text(500),
                        
        ];
    }
}
