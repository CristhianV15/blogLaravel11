<?php

namespace Database\Seeders;

use App\Models\Address;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Address = new Address();
        $Address -> Departamento = "Piura";
        $Address -> Ciudad = "Piura";
        $Address -> Distrito = "26 de octubre";
        $Address -> Calle = "Calle x ";
        $Address -> created_at = now();
        $Address -> updated_at = now();
        $Address -> profile_id = 1;
        $Address -> save();
    }
}
