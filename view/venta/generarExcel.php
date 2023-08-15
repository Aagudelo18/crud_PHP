<?php
session_start();
if (isset($_SESSION["usuario"])){
    ?>
<?php
    require_once("../../config/db.php");
    header("Content-Type: application/xls");
    header("Content-Disposition: attachment; filename=ventas.xls");

    require_once("c://xampp/htdocs/laparisinamvc/controller/ventaController.php");
        $obj = new ventaController();
        $rows = $obj->index();
    ?>

    <table class="table table-sm table-striped table-hover mt-3">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>CANTIDAD</th>
                        <th>FECHA ENTREGA</th>
                        <th>PRECIO</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if($rows): ?>
                        <?php foreach($rows as $row): ?>
                            <tr>
                                <th><?= $row[0] ?></th>
                                <th><?= $row[4] ?></th>
                                <th><?= $row[5] ?></th>
                                <th><?= $row[6] ?></th>
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
