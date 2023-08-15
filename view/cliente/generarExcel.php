<?php
    require_once("../../config/db.php");
    header("Content-Type: application/xls");
    header("Content-Disposition: attachment; filename=Clientes.xls");

    require_once("c://xampp/htdocs/laparisinamvc/controller/clienteController.php");
    $obj = new clienteController();
    $rows = $obj->index();
    ?>

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
                    <?php if($rows): ?>
                        <?php foreach($rows as $row): ?>
                            <tr>
                                <th><?= $row["idCliente"] ?></th>
                                <th><?= $row["nombredocumento"] ?></th>
                                <th><?= $row["Nombre"] ?></th>
                                <th><?= $row["Documento"] ?></th>
                                <th><?= $row["Direccion"] ?></th>
                                <th><?= $row["Telefono"] ?></th>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                    <?php endif; ?>
                </tbody>
            </table>
            <?php
 
