<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Los controladores controlan las rutas (routes/web.php)
class HomeController extends Controller
{
    public function __invoke(){
      //  return view('welcome');
      return "bienvenido a la principal";
    }
}
