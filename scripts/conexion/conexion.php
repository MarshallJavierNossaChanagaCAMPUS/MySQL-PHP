<?php

    //Estas son las propiedades del servidor como la ip que en este caso es el localhost, el usuario y la clave para poder entrar a dicho servidor, además también debemos tener una variable con la base de datos para hacer perfectamente la conexión
    $host = "localhost";
    $user = "campus";
    $key = "campus2023";
    $database = "usuarios";

    //Esta es la conexión como tal al servidor y a la base de datos
    $conexion = new mysqli($host, $user, $key, $database);
    $conexion->set_charset("utf8");

    //Aqui verificamos si ha ocurrido algún error en la conexión y este retorna un valor, si retorna un valor diferente a 0 significa que hubo un error, este se puede ver con "$conexion->connect_error"
    if ($conexion->connect_errno) {
        echo "Ha ocurrido un error en la base de datos: " . $conexion->connect_error;
    } else {
        echo "La conexión a la base de datos ha sido exitosa";
    }

?>