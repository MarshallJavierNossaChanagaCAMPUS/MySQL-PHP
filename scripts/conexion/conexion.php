<?php
    //Estas son las propiedades del servidor como la ip que en este caso es el localhost, el usuario y la clave para poder entrar a dicho servidor, además también debemos tener una variable con la base de datos para hacer perfectamente la conexión
    $host = "localhost";
    $port = "";
    $user = "campus";
    $key = "campus2023";
    $database = "horarios";

    //Esta es la conexión como tal al servidor y a la base de datos
    $conexion = new mysqli($host, $user, $key, $database);
    $conexion->set_charset("utf8");
?>
