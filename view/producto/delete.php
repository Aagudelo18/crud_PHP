
<?php
      require_once("c://xampp/htdocs/laparisinamvc/controller/productoController.php");
      $obj = new productoController();
      $obj->delete($_GET['id']);
?>
