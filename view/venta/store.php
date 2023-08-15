<?php

    ?>
    <?php
        require_once("c://xampp/htdocs/laparisinamvc/controller/ventaController.php");
        $obj = new ventaController();
        $obj->guardar($_POST['cantidad'], $_POST['FechaEntrega'], $_POST['Precio']);
    ?>
