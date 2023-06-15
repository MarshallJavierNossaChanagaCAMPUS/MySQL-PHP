<?php

    include "conexion/conexion.php";

    if (isset($_POST["guardar"])) {
        $nombre = $_POST["nombre"];
        $correo = $_POST["correo"];
        $fecha = $_POST["fecha"];

        $query = "INSERT INTO users(nombre, correo, fecha) VALUES ('$nombre', '$correo', '$fecha')";
        $result = mysqli_query($conexion, $query);

        if (!result) {
            die("Query failed");
        }else{
            echo "Los datos se han guardado correctamente";
        }
    };

?>