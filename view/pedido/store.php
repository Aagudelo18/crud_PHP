
    <?php
        require_once("c://xampp/htdocs/laparisinamvc/controller/pedidoController.php");
        $obj = new pedidoController();
        $obj->guardar($_POST['cantidad'], $_POST['FechaEntrega'], $_POST['Precio']);
    ?>
