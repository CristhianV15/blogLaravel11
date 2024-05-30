<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comment  = new Comment();
        $comment ->body = "Primer comentario de prueba";
        $comment ->post_id = "1";
        $comment -> created_at = now();
        $comment -> updated_at = now();
        $comment -> save();

        $comment  = new Comment();
        $comment ->body = "Segundo comentario de prueba";
        $comment ->post_id = "1";
        $comment -> created_at = now();
        $comment -> updated_at = now();
        $comment -> save();    

        $comment  = new Comment();
        $comment ->body = "Tercer comentario de prueba";
        $comment ->post_id = "2";
        $comment -> created_at = now();
        $comment -> updated_at = now();
        $comment -> save();
    }
}
