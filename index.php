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
                            <input type="text" name="nombre" class="form-control mb-2 mt-2" placeholder="Nombre completo" autofocus>
                        </div>
                        <div class="form-group">
                            <input type="email" name="correo" class="form-control mb-2 mt-2" placeholder="example@gmail.com">
                        </div>
                        <div class="form-group">
                            <input type="date" name="fecha" class="form-control mb-2 mt-2">
                        </div>
                        <input type="submit" class="btn btn-success btn-block" name="guardar" value="Guardar">
                    </form>
                </div>

            </div>
            
            <div class="col-md-8">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Fecha ingreso</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $query = "SELECT * FROM users";
                            $result = mysqli_query($conexion, $query);
                            while ($row = mysqli_fetch_array($result)) {?>
                                <tr>
                                    <td><?php echo $row['id'];?></td>
                                    <td><?php echo $row['nombre'];?></td>
                                    <td><?php echo $row['correo'];?></td>
                                    <td><?php echo $row['fecha'];?></td>
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