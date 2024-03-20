<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 11 - Post detalle</title>
</head>
<body>
    
    @if ($categoria) 
    <h1>Aqui se mostrara el contenido del {{ $post }} de la categoria {{ $categoria }} </h1>
    @else
    <h1>Aqui se mostrara el contenido del {{ $post}} 
    </h1>
    @endif



<!--Forma 2 mas larga y por logica 
    <h1><?php 
        if($categoria){
         ?>  "Aqui se mostrara el contenido del post <?= $post ?> de la categoria <?=$categoria ?>" 
        <?php } else {
        ?> "Aqui se mostrara el contenido del post <?= $post ?> "
        <?php 
        }?> </h1> -->
</body>
</html>

<!-- < ?= $post  ? (>, quitar parantesis) -->