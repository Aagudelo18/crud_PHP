<?php
    require_once("c://xampp/htdocs/laparisinamvc/view/head/head.php");
?>
<?php
session_start();
if (isset($_SESSION["usuario"])){
    ?>
    <div class="container-fluid">
    <div class="col-4 row justify-content-center">
        <div>
            <h1 class="text-white">Nueva Venta</h1>
        </div>
        <div>
            <form action="store.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="cantidad" class="form-label">Cantidad</label>
                    <input type="number" name="cantidad" id="cantidad" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="FechaEntrega" class="form-label">Fecha Entrega</label>
                    <input type="date" name="FechaEntrega" id="FechaEntrega" class="form-control" required>
                </div>
                
                <div class="mb-3">
                    <label for="FechaEntrega" class="form-label">Precio</label>
                    <input type="number" name="Precio" id="Precio" class="form-control" required>
                </div>
                <div class="">
                    <a href="/laparisinamvc/view/venta/index.php"><button type="button" class="btn btn-danger">Cancelar</button></a>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
    </div>

<?php
    require_once("c://xampp/htdocs/laparisinamvc/view/head/footer.php");
?>
<?php
} else{
    header('location:../login.php');
}
?>