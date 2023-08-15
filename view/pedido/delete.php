
      <?php
            require_once("c://xampp/htdocs/laparisinamvc/controller/pedidoController.php");
            $obj = new pedidoController();
            $obj->delete($_GET['id']);
      ?>

