
    <?php
        require_once("c://xampp/htdocs/laparisinamvc/controller/categoriaController.php");
        $obj = new categoriaController();
        $obj->update($_POST['id'],$_POST['nombre'], $_POST['descripcion']);
    ?>
