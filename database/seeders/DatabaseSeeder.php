<?php

namespace Database\Seeders;

use App\Models\Profile;
use App\Models\User;
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
    // Para crear seeder : php artisan make:seeder PostSeeder  
    //Correr solo el seeder : php artisan db:seed || php artisan migrate:fresh --seed
       
    //Llamar a los seeder creados : Post - User
       $this->call([
            UserSeeder::class,
            ProfileSeeder::class,
            PostSeeder::class,
            CommentsSeeder::class,
            AdressSeeder::class,
       ]);
    }
}
