<?php
    include "scripts/conexion/conexion.php"
?>

<?php
    include "uploads/header.php";
?>
    <div class="container p-4">

        <div class="row">

            <div class="col-md-4">

                <div class="card card-body">
                    <form action="scripts/save-task.php" method="POST">
                        <div class="form-group">
                            <label for="">Tarea</label>
                            <input type="text" name="tarea" class="form-control mb-2 mt-2" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="">Hora de inicio</label>
                            <input type="time" name="horaInicio" class="form-control mb-2 mt-2" placeholder="Hora de inicio">
                        </div>
                        <div class="form-group">
                            <label for="">Hora de finalizacion</label>
                            <input type="time" name="horaFinal" class="form-control mb-2 mt-2" placeholder="Hora de finalización">
                        </div>
                        <input type="submit" class="btn btn-success btn-block" name="guardar" value="Guardar">
                    </form>
                </div>

            </div>
            
            <div class="col-md-8">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Tarea</th>
                            <th>Hora inicio</th>
                            <th>Hora finalización</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $query = "SELECT * FROM tareas";
                            $result = mysqli_query($conexion, $query);
                            while ($row = mysqli_fetch_array($result)) {?>
                                <tr>
                                    <td><?php echo $row['tarea'];?></td>
                                    <td><?php echo $row['horaInicio'];?></td>
                                    <td><?php echo $row['horaFinal'];?></td>
                                    <td>
                                        <a href="scripts/edit-task.php?id=<?php echo $row['id']?>" class="btn btn-secondary">Editar</a>
                                        <a href="scripts/delete-task.php?id=<?php echo $row['id']?>" class="btn btn-danger">Eliminar</a>
                                    </td>
                                </tr>
                            <?php }
                        ?>
                    </tbody>
                </table>
            </div>

        </div>

    </div>
    
<?php
    include "uploads/footer.php";
?>