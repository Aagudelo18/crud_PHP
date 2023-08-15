<?php
session_start();
if (isset($_SESSION["usuario"])){
    ?>
<?php
    require_once("../../config/db.php");
    header("Content-Type: application/xls");
    header("Content-Disposition: attachment; filename=productos.xls");

    require_once("c://xampp/htdocs/laparisinamvc/controller/productoController.php");
    $obj = new productoController();
    $rows = $obj->index();
    ?>

    <table class="table table-sm table-striped table-hover mt-3">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>CATEGORIA</th>
                        <th>NOMBRE</th>
                        <th>DESCRIPCION</th>
                        <th>PRECIO</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if($rows): ?>
                        <?php foreach($rows as $row): ?>
                            <tr>
                                <th><?= $row[0] ?></th>
                                <th><?= $row[1] ?></th>
                                <th><?= $row[2] ?></th>
                                <th><?= $row[3] ?></th>
                                <th><?= $row[4] ?></th>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                    <?php endif; ?>
                </tbody>
            </table>
            <?php
} else{
    header('location:../login.php');
}
?>
