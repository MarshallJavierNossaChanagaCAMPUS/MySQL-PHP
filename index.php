<?php
    include "uploads/header.php";
?>
    <form id="formulario" method="post" action="app.php">
        <label class="form-label">POST</label>
        <input class="form-control" type="text" placeholder="nombre" name="nombre">
        <input class="form-control" type="email" placeholder="correo" name="correo">
        <input class="form-control" type="date" name="fecha">
    </form>
    <table class="table">
        <thead class="table-dark">
            <tr>
                <td>ID</td>
                <td>Nombre</td>
                <td>Correo</td>
                <td>Fecha</td>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
    
<?php
    include "uploads/footer.php";
?>