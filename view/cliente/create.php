<?php 
require_once("C://xampp/htdocs/laparisinamvc/view/head/head.php");
require_once("C://xampp/htdocs/laparisinamvc/controller/clienteController.php");
$objecto = new clienteController();
$documentos = $objecto->listardocumentos();
?>
<?php
session_start();
if (isset($_SESSION["usuario"])){
    ?>
<div class="container-fluid">
  <div class="col-4 row justify-content-center">
      <div>
        <h1 class="text-white">Nuevo Cliente</h1>
      </div>
      <div>
        <form action="store.php" method="post" enctype="multipart/form-data">
            <label for="documentos">Tipo Documento:</label>
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
                <label for="documento" class="form-label">Documento</label>
                <input type="text" name="documento" id="documento" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="direccion" class="form-label">Direccion</label>
                <input type="text" name="direccion" id="direccion" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="telefono" class="form-label">Telefono</label>
                <input type="text" name="telefono" id="telefono" class="form-control" required>
            </div>
            
            <div class="">
                <a href="/prolaparisinamvcyecto/view/cliente/index.php"  class="btn btn-danger">Cancelar</a>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
      </div>
  </div>
</div>

<?php require_once("c://xampp/htdocs/laparisinamvc/view/head/footer.php"); ?>
<?php } else{ header('location:../login.php'); } ?>