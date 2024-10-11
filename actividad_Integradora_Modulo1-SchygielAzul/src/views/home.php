<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../views/pages/styles/home.css">
    <title>ACTIVIDAD INTEGRADORA</title>
</head>
<body>
<nav>
    <a href="index.php?ruta=home">Home</a>
    <a href="index.php?ruta=registro">Registrarse</a>
    <a href="index.php?ruta=iniciarsesion">Iniciar Sesión</a>
    <div class="animation start-home"></div>
    <p>ACTIVIDAD INTEGRADORA MÓDULO 1</p>
</nav>

<?php
if(isset($_GET['ruta'])){
if (
    $_GET ['ruta'] == "home" ||
    $_GET ['ruta'] == "registro" ||
    $_GET ['ruta'] == "iniciarsesion" 
    ){
        include"views/" .$GET['ruta'] ."php";
    }else{
        include "src/views/errors/error404.php";
    }
} else{
        include "src/views/home.php";
    }
?>

</body>
</html>