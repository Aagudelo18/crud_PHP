
      <?php
            require_once("c://xampp/htdocs/laparisinamvc/controller/ventaController.php");
            $obj = new ventaController();
            $obj->delete($_GET['id']);
      ?>

