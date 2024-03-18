<?php

use Illuminate\Support\Facades\Route;

//Importa el orden de las rutas, de arriba a abajo
Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', function(){
    return "Bienvenido a los posts";
});

Route::get('/posts/{post}/{categoria?}', function($post,$categoria= null){ //mismo nombre de la variable del contenido variable
    if($categoria){
        return "Aqui se mostrara el contenido del post {$post} de la categoria {$categoria}";
    }
    return "Aqui se mostrara el contenido del post {$post}";
});

/*Route::get('/posts/{post}/{categoria}', function ($post,$categoria){
    return "Aqui se mostrara el contenido del post {$post} de la categoria {$categoria}";
}); Para poner dos opciones variables, pero ambos necesarios para entrar a la pagina*/

//Peticiones
/*  Get: Cuando se escribe en la url o se da click en un enlace
    Post: Peticiones desde un formulario, cuando se envia información y para que no sea visible
    Put/Path/Delete: Similares al post, put/patch: actualizar registro y delete para eliminar
 */