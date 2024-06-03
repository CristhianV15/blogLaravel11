<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

//Los controladores controlan las rutas (routes/web.php)

class PostController extends Controller
{
    public function index(){
        $post = Post::all();
        return $post;
        return view ('posts.index');
    }
    public function create(){
        return view ('posts.create');
    }
    public function show($post, $categoria = null){
        return view ('posts.show', [
            'post' => $post,
            'categoria' => $categoria
        ]);
    }
}
