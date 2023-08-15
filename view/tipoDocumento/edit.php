<?php 
require_once("C://xampp/htdocs/laparisinamvc/view/head/head.php");
require_once("C://xampp/htdocs/laparisinamvc/controller/tipoDocumentoController.php");
$obj = new tipoDocumentoController();
$cat = $obj->show($_GET['id']);

?>
<?php
session_start();
if (isset($_SESSION["usuario"])){
    ?>
<form action="update.php" method="post" >
<h2 class="text-white">Editar Tipo de Documento</h2>
    <div class="mb-3 row">  
        <label for="staticEmail" class="col-sm-2 col-form-label">ID</label>
        <div class="col-sm-10">
            <input type="text" name="id" readonly class="form-control-plaintext" value="<?= $cat[0] ?>">
        </div>
    </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" required value="<?= $cat[1] ?>">
            </div>

            <div class="">
                <a href="show.php?id=<?= $cat[0] ?>"  class="btn btn-danger">Cancelar</a>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>

<?php
    require_once("C://xampp/htdocs/laparisinamvc/view/head/footer.php");
    ?>
<?php } else{ header('location:../login.php'); } ?>