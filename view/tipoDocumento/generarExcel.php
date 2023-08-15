
<?php
    require_once("../../config/db.php");
    header("Content-Type: application/xls");
    header("Content-Disposition: attachment; filename=Tipos Documentos.xls");

    require_once("c://xampp/htdocs/laparisinamvc/controller/tipoDocumentoController.php");
    $obj = new tipoDocumentoController();
    $rows = $obj->index();
    ?>

    <table class="table table-sm table-striped table-hover mt-3">
                <thead class="table-dark">
                    <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if($rows): ?>
                        <?php foreach($rows as $row): ?>
                            <tr>
                            <th><?= $row[0] ?></th>
                            <th><?= $row[1] ?></th>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                    <?php endif; ?>
                </tbody>
            </table>
