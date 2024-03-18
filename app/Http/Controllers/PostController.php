<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Los controladores controlan las rutas (routes/web.php)

class PostController extends Controller
{
    public function index(){
        return "Aqui se mostraran todos los post";
    }
    public function create(){
        return "Aqui habra un formulario para crear un post";
    }
    public function show($post, $categoria = null){
        if($categoria){
            return "Aqui se mostrara el contenido del post {$post} de la categoria {$categoria}";
        }
        return "Aqui se mostrara el contenido del post {$post}";
    }
}
