<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;

//Importa el orden de las rutas, de arriba a abajo
Route::get('/', HomeController::class); //Array con dos controladores[Clase,Metodo]

Route::get('/posts', [PostController::class, 'index']);

Route::get('/posts/create', [PostController::class, 'create']);

Route::get('/posts/{post}/{categoria?}', [PostController::class, 'show']);

/*Route::get('/posts/{post}/{categoria}', function ($post,$categoria){
    return "Aqui se mostrara el contenido del post {$post} de la categoria {$categoria}";
}); Para poner dos opciones variables, pero ambos necesarios para entrar a la pagina*/

//Peticiones
/*  Get: Cuando se escribe en la url o se da click en un enlace
    Post: Peticiones desde un formulario, cuando se envia información y para que no sea visible
    Put/Path/Delete: Similares al post, put/patch: actualizar registro y delete para eliminar
 */

 Route::get('prueba', function(){
    /*Crear un nuevo post
    $post = new Post;
    $post ->title = 'Titulo de prueba 1';
    $post ->content ='Contenido de prueba uno';
    $post ->categoria = 'Categoria de prueba';

    $post ->save();

    VerDatos y editarlos 
    $post  = Post::find(1);
    $post = Post::where('title','Titulo de prueba 1')
    ->first();
    $post-> categoria = 'Back End';
    $post ->save();
    
    Busquedas
    $post = Post::where('id','>=','1')->get();
    $post = Post::orderBy('id','desc')
            ->select('id','title','categoria')
            ->take(7)->get();
    return $post;
    */
    $post = Post::find(1);
    $post ->delete();
});