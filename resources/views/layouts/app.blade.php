<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','Criva Pag')</title> <!-- Se puede poner por defecto información en el yield-->

    <script src= "https://cdn.tailwindcss.com"></script>
    @stack('css') <!--El stack se usa para contenido multiple y el yield para un solo contenido-->
</head>
<body>
    <header></header>
    @yield('content') 
    <footer></footer>
</body>
</html>