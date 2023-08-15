<?php 
require_once("C://xampp/htdocs/laparisinamvc/view/head/head.php");

?>
<?php
session_start();
if (isset($_SESSION["usuario"])){
    ?>
<div class="container-fluid">
  <div class="col-4 row justify-content-center">
      <div>
        <h1 class="text-white">Nuevo Tipo de Documento</h1>
      </div>
      <div>
        <form action="store.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" required>
            </div>

            <div class="">
                <a href="/laparisinamvc/view/tipoDocumento/index.php"  class="btn btn-danger">Cancelar</a>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
      </div>
  </div>
</div>

<?php
    require_once("C://xampp/htdocs/laparisinamvc/view/head/footer.php");
    ?>
    <?php } else{ header('location:../login.php'); } ?>