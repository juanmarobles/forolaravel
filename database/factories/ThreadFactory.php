<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ThreadFactory extends Factory
{
   
    public function definition(): array
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 10), // Genera un número aleatorio entre 1 y 10.
            'title' => $this->faker->sentence(), // Genera una oración aleatoria.
            'body' => $this->faker->text(), // Genera texto aleatorio.
        ];
    }
}
