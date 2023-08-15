
    <?php
        require_once("c://xampp/htdocs/laparisinamvc/controller/categoriaController.php");
        $obj = new categoriaController();
        $obj->guardar($_POST['nombre'], $_POST['descripcion']);
    ?>
