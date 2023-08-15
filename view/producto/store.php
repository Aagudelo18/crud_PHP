
<?php
    require_once("c://xampp/htdocs/laparisinamvc/controller/productoController.php");
    $obj = new productoController();
    $obj->guardar($_POST['categoria'], $_POST['nombre'], $_POST['descripcion'], $_POST['precio']);
?>
