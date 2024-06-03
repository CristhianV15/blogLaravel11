<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage; // Import Storage facade

use Faker\Generator as Faker; // Import Faker class

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = app(Faker::class); // Instancia de la clase Faker

        $femaleName = $faker->name('female');
        // Generate random filename with female name and .jpg extension
        $imageFilename = Str::slug($femaleName) . '.jpg'; //el Str::slug Convierte el nombre de usuario en un formato seguro para nombres de archivo (reemplaza espacios por guiones bajos y eliminando caracteres especiales.) 


        // Check if the directory exists and create it if it doesn't
        if (!Storage::exists('images/users')) {
            Storage::makeDirectory('images/users');
        }
        
        // Store image using Faker and generated filename
        Storage::put('images/users/' . $imageFilename, $faker->image());


        return [
            'name' => $femaleName,
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'avatar' =>  $imageFilename,
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
