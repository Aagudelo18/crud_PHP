<?php
    require_once("c://xampp/htdocs/laparisinamvc/view/head/head.php");
    require_once("c://xampp/htdocs/laparisinamvc/controller/categoriaController.php");
    $obj = new categoriaController();
    $cat = $obj->show($_GET['id']);
?>
<?php
session_start();
if (isset($_SESSION["usuario"])){
    ?>
    <form action="update.php" method="post">
        <h2 class="text-white">Editar Categoria</h2>
        <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">ID</label>
            <div class="col-sm-10">
                <input type="text" name="id" readonly class="form-control-plaintext" value="<?= $cat[0] ?>">
            </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-10">
                <input type="text" name="nombre" class="form-control" id="inputPassword" value="<?= $cat[1] ?>">
            </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Descripcion</label>
            <div class="col-sm-10">
                <input type="text" name="descripcion" class="form-control" id="inputPassword" value="<?= $cat[2] ?>">
            </div>
    </div>
    <div class="row justify-content-end mt-4">
                <div class="col-auto">
                    <a href="show.php?id=<?= $cat[0] ?>" class="btn btn-primary">Cancelar</a>
                    <input class="btn btn-warning" type="submit" value="Guardar">
                </div>
            </div>
    </form>

<?php
    require_once("c://xampp/htdocs/laparisinamvc/view/head/footer.php");
?>
<?php
} else{
    header('location:../login.php');
}
?>