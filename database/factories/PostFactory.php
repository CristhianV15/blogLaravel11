<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {    
        $faker = $this->faker; // Instancia de Faker (inyectada)
        $user = User::all()->random(); // Seleccionar un usuario aleatorio

            return [               
                'id_usuario' => $user->id, // ID del usuario aleatorio
                'title' => $faker->sentence(mt_rand(3, 8)),
                'content' => $faker->paragraphs(2, true),
                'published_at' => now(),
            ];        
    }
}
