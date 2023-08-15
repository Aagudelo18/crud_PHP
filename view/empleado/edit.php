<?php 
require_once("C://xampp/htdocs/laparisinamvc/view/head/head.php");
require_once("C://xampp/htdocs/laparisinamvc/controller/empleadosController.php");
$objecto = new empleadosController();
$cat = $objecto->show($_GET['id']);
$documentos = $objecto->listardocumentos();

?>
<?php
session_start();
if (isset($_SESSION["usuario"])){
    ?>
<form action="update.php" method="post" >
<h2 class="text-white">Editar Empleado</h2>
    <label for="documentos">Tipo Documento:</label>
                        <select name="documentos" id="documentos">
                            <?php foreach ($documentos as $documento): ?>
                                <option value="<?php echo $documento['idTipodocumento']; ?>"><?php echo $documento['Nombre']; ?></option>
                            <?php endforeach; ?>
                        </select>
    <div class="mb-3 row">  
        <label for="staticEmail" class="col-sm-2 col-form-label">ID</label>
        <div class="col-sm-10">
            <input type="text" name="id" readonly class="form-control-plaintext" value="<?= $cat[0] ?>">
        </div>
    </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" required value="<?= $cat["Nombre"] ?>">
            </div>

            <div class="mb-3">
                <label for="cedula" class="form-label">Cedula</label>
                <input type="text" name="cedula" id="cedula" class="form-control" required value="<?= $cat["Cedula"] ?>">
            </div>

            <div class="mb-3">
                <label for="cargo" class="form-label">Cargo</label>
                <input type="text" name="cargo" id="cargo" class="form-control" required value="<?= $cat["Cargo"] ?>">
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