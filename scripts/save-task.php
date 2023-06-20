<?php

    include "conexion/conexion.php";

    if (isset($_POST["guardar"])) {

        $tarea = $_POST["tarea"];
        $horaInicio = $_POST["horaInicio"];
        $horaFinal = $_POST["horaFinal"];

        $query = "INSERT INTO tareas(tarea, horaInicio, horaFinal) VALUES ('$tarea', '$horaInicio', '$horaFinal')";
        $result = mysqli_query($conexion, $query);

        if ($result) {
            header("Location: ../index.php");
        }   
    };

?>