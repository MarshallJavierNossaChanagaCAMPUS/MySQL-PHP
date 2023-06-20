<?php
    include("conexion/conexion.php");

    if (isset($_GET['id'])) {

        $id = $_GET['id'];

        $query = "SELECT * FROM tareas WHERE id = $id";
        $result = mysqli_query($conexion, $query);

        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $tarea = $row['tarea'];
            $horaInicio = $row['horaInicio'];
            $horaFinal = $row['horaFinal'];
        }
    }

    if (isset($_POST['update'])) {

        $id = $_GET['id'];
        $tarea = $_POST['tarea'];
        $horaInicio = $_POST['horaInicio'];
        $horaFinal = $_POST['horaFinal'];

        $query = "UPDATE tareas set tarea = '$tarea', horaInicio = '$horaInicio', horaFinal = '$horaFinal' WHERE id = $id";
        mysqli_query($conexion, $query);

        header("Location: ../index.php");
    }
?>

<?php include("../uploads/header.php")?>

<div class="container d-flex justify-content-center">
    <div class="col-md-4 m-4">
        <div class="card card-body">
            <form action="edit-task.php?id=<?php echo $_GET['id']; ?>" method="POST">
                <div class="form-group">
                    <label for="">Tarea</label>
                    <input type="text" name="tarea" value="<?php echo $row["tarea"]; ?>" class="form-control mb-2 mt-2" autofocus>
                </div>
                <div class="form-group">
                    <label for="">Hora de inicio</label>
                    <input type="time" name="horaInicio" class="form-control mb-2 mt-2" placeholder="Hora de inicio">
                </div>
                <div class="form-group">
                    <label for="">Hora de finalizacion</label>
                    <input type="time" name="horaFinal" class="form-control mb-2 mt-2" placeholder="Hora de finalización">
                </div>
                <input type="submit" class="btn btn-success btn-block" name="update" value="Actualizar">
            </form>
        </div>
    </div>
</div>

<?php include("../uploads/footer.php")?>