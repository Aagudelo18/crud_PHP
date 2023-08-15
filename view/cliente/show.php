<?php 
require_once("C://xampp/htdocs/laparisinamvc/view/head/head.php");
require_once("C://xampp/htdocs/laparisinamvc/controller/clienteController.php");
$obj = new clienteController();
$date = $obj->show($_GET['id']);

?>

<?php
session_start();
if (isset($_SESSION["usuario"])){
    ?>
<div class="container py-3">
        <h2 class="text-center text-white">Detalles Cliente</h2>
        <div class="row justify-content-end mt-4">
            <div class="col-auto">
                <a href="index.php" class="btn btn-success">Regresar</a>
                <a href="edit.php?id=<?= $date[0] ?>" class="btn btn-warning">Editar</a>
                <!-- Button trigger modal -->
                <a class="btn btn-danger text-white" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</a>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">¿Desea eliminar el registro?</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Una vez eliminado no podra recuperar el registro
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <a href="delete.php?id=<?= $date[0] ?>" class="btn btn-danger">Eliminar</a>
                        <!--<button type="button" >Eliminar</button>-->
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>

        <table class="table table-sm table-striped table-hover mt-3">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>TIPO DOCUMENTO</th>
                    <th>NOMBRE</th>
                    <th>DOCUMENTO</th>
                    <th>DIRECCION</th>
                    <th>TELEFONO</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= $date["idCliente"] ?></td>
                    <td><?= $date["idTipodocumento"] ?></td>
                    <td><?= $date["Nombre"] ?></td>
                    <td><?= $date["Documento"] ?></td>
                    <td><?= $date["Direccion"] ?></td>
                    <td><?= $date["Telefono"] ?></td>
                </tr>
            </tbody>
        </table>
    </div>

    <?php
    require_once("C://xampp/htdocs/laparisinamvc/view/head/footer.php");
    ?>
<?php } else{ header('location:../login.php'); } ?>