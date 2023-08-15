<?php 
require_once("C://xampp/htdocs/laparisinamvc/view/head/head.php");
require_once("C://xampp/htdocs/laparisinamvc/controller/empleadosController.php");
$obj = new empleadosController();
$rows = $obj->index();

?>
<?php
session_start();
if (isset($_SESSION["usuario"])){
    ?>
<div class="container py-3">
        <h2 class="text-center text-white">Empleados</h2>
        <div class="row justify-content-end mt-4">
            <div class="d-flex justify-content-between">
                <a href="generarExcel.php" class="btn btn-success"><i class="bi bi-file-earmark-excel"></i></a>
                <a href="create.php" class="btn btn-primary"><i class="bi bi-plus-lg mr-1"></i>Crear Empleado</a>
            </div>
        </div>

        <table class="table table-sm table-striped table-hover mt-3">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>TIPO DOCUMENTO</th>
                    <th>NOMBRE</th>
                    <th>CEDULA</th>
                    <th>CARGO</th>
                    <th>ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                <?php if($rows): ?>
                    <?php foreach($rows as $row): ?>
                        <tr>
                            <th><?= $row["idEmpleados"] ?></th>
                            <th><?= $row["nombredocumento"] ?></th>
                            <th><?= $row["Nombre"] ?></th>
                            <th><?= $row["Cedula"] ?></th>
                            <th><?= $row["Cargo"] ?></th>
                            <th>
                                <a href="show.php?id=<?= $row[0]?>" class="btn btn-primary">Ver</a>
                                <a href="edit.php?id=<?= $row[0]?>" class="btn btn-warning">Editar</a>
                                <a href="generarPdf.php?id=<?= $row[0]?>" class="btn btn-danger"><i class="bi bi-filetype-pdf"></i></a>
             
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
                                            <a href="delete.php?id=<?= $row[0] ?>" class="btn btn-danger">Eliminar</a>
                                            <!--<button type="button" >Eliminar</button>-->
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </th>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td>No hay registros</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
        <p align="right">
        <a href="generarExcel.php" class="btn btn-success"><i class="bi bi-file-earmark-excel"></i></a>
        </p>
    </div>










<?php
    require_once("C://xampp/htdocs/laparisinamvc/view/head/footer.php");
    ?>
<?php } else{ header('location:../login.php'); } ?>