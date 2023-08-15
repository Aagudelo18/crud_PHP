
      <?php
            require_once("c://xampp/htdocs/laparisinamvc/controller/categoriaController.php");
            $obj = new categoriaController();
            $obj->delete($_GET['id']);
      ?>

