<?php
    include("scripts/conexion/conexion.php");

    if (isset($_GET['id'])) {

        $id = $_GET['id'];

        $query = "DELETE * FROM users WHERE id = $id";

        $statement = $conexion->prepare($query);
        $statement->bind_param("i", $id);
        $statement->execute();
        $result = $statement->get_result();

        /* $id = $_GET['id'];
        $query = "SELECT * FROM users WHERE id=$id";
        $result = mysqli_query($conexion, $query);
        if (mysqli_num_rows($result) == 1) {
            echo "hola";
        } */
    }
?>