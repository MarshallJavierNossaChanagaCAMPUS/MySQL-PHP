<?php

    //Estas son las propiedades del servidor como la ip que en este caso es el localhost, el usuario y la clave para poder entrar a dicho servidor, además también debemos tener una variable con la base de datos para hacer perfectamente la conexión
    $host = "localhost";
    $user = "campus";
    $key = "campus2023";
    $database = "usuarios";

    //Esta es la conexión como tal al servidor y a la base de datos
    $conexion = new mysqli($host, $user, $key, $database);
    $conexion->set_charset("utf8");

    //Verificamos la conexión a la base de datos, "$conexion->connect_errno" verifica si ha ocurrido algún error durante la conexión, si el valor que retorna es distindo de 0 significa que ha ocurrido un error durante la conexión y la descripción de este se puede ver con "$conexion->connect_error"
    if ($conexion->connect_errno) {
        echo "Ha fallado la conexión a la base de datos: " . $conexion->connect_error;
    } else {
        echo "Conexión exitosa a la base de datos";
    }
    

?>