<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $post = new Post();
        $post-> title = "Post número 1";
        $post-> content = "Contenido del post 1";
        $post-> category ='Categoria 1';
        $post-> published_at = now(); //'2024-05-07 00:00:00'
        $post-> user_id = 1;
        $post ->save();

        $post = new Post();
        $post-> title = "Post número 2";
        $post-> content = "Contenido del post 2";
        $post-> category ='Categoria 1';
        $post-> published_at = now(); //'2024-05-07 00:00:00'
        $post-> user_id = 2;
        $post ->save();
    }
}
