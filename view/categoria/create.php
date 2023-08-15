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
            <h1 class="text-white">Nueva Categoria</h1>
        </div>
        <div>
            <form action="store.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descripcion</label>
                    <textarea name="descripcion" id="descripcion" class="form-control" row="3" required></textarea>
                </div>
                <div class="">
                    <a href="/laparisinamvc/view/categoria/index.php"><button type="button" class="btn btn-danger">Cancelar</button></a>
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