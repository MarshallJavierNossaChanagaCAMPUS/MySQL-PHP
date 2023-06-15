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

            </div>

        </div>

    </div>
    
<?php
    include "uploads/footer.php";
?>