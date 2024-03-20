<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Los controladores controlan las rutas (routes/web.php)

class PostController extends Controller
{
    public function index(){
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
