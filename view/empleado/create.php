<?php 
require_once("C://xampp/htdocs/laparisinamvc/view/head/head.php");
require_once("C://xampp/htdocs/laparisinamvc/controller/empleadosController.php");
$objecto = new empleadosController();
$documentos = $objecto->listardocumentos();
?>
<?php
session_start();
if (isset($_SESSION["usuario"])){
    ?>
<div class="container-fluid">
  <div class="col-4 row justify-content-center">
      <div>
        <h1 class="text-white">Nuevo Empleado</h1>
      </div>
      <div>
        <form action="store.php" method="post" enctype="multipart/form-data">
        <select name="documentos" id="documentos">
                    <?php foreach ($documentos as $documento): ?>
                        <option value="<?php echo $documento['idTipodocumento']; ?>"><?php echo $documento['Nombre']; ?></option>
                    <?php endforeach; ?>
                </select>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="cedula" class="form-label">Cedula</label>
                <input type="text" name="cedula" id="cedula" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="cargo" class="form-label">Cargo</label>
                <input type="text" name="cargo" id="cargo" class="form-control" required>
            </div>

            <div class="">
                <a href="/laparisinamvc/view/empleado/index.php"  class="btn btn-danger">Cancelar</a>
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