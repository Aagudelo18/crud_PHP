<?php
    require_once("../../config/db.php");
    header("Content-Type: application/xls");
    header("Content-Disposition: attachment; filename=Empleados.xls");

    require_once("c://xampp/htdocs/laparisinamvc/controller/empleadosController.php");
    $obj = new empleadosController();
    $rows = $obj->index();
    ?>

    <table class="table table-sm table-striped table-hover mt-3">
                <thead class="table-dark">
                    <tr>
                    <th>ID</th>
                    <th>TIPO DOCUMENTO</th>
                    <th>NOMBRE</th>
                    <th>CEDULA</th>
                    <th>CARGO</th>
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
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                    <?php endif; ?>
                </tbody>
            </table>
            <?php
 
