<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         //Datos que siempre estar en la base de datos | php artisan db:seed
         $user = new User();
         $user->name = 'Admin';
         $user->email = "admin@gmail.com";
         $user->password = bcrypt('1234567');
         $user->save();    
     
         $user = new User();
         $user->name = 'Alicia';
         $user->email = "alicia@gmail.com";
         $user->password = bcrypt('1234567');
         $user->save();    
    }
}
