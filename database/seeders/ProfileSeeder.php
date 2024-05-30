<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $profile = new Profile();
        $profile -> created_at = now();
        $profile -> update_at = now();
        $profile -> facebook = "Admin fb";
        $profile -> twitter = "Admin Twt";
        $profile 
        facebook , twitter , user_id
    }
}
