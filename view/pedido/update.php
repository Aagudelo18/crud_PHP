
    <?php
        require_once("c://xampp/htdocs/laparisinamvc/controller/pedidoController.php");
        $obj = new pedidoController();
        $obj->update($_POST['id'],$_POST['cantidad'], $_POST['FechaEntrega'], $_POST['Precio']);
    ?>
