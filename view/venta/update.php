
    <?php
        require_once("c://xampp/htdocs/laparisinamvc/controller/ventaController.php");
        $obj = new ventaController();
        $obj->update($_POST['id'],$_POST['cantidad'], $_POST['FechaEntrega'], $_POST['Precio']);
    ?>
