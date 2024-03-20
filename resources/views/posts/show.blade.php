<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 11 - Post detalle</title>
</head>
<body>
    holasldkjaldskjkl  
    <h1><?php 
    if($categoria){
        return "Aqui se mostrara el contenido del post $post de la categoria $categoria";
    }
    return "Aqui se mostrara el contenido del post $post";
    ?> </h1>
</body>
</html>

<!-- < ?= $post  ? (>, quitar parantesis) -->