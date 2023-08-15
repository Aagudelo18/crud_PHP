<?php
session_start();
if (isset($_SESSION["usuario"])){
    ?>
<?php 

require_once("C://xampp/htdocs/laparisinamvc/controller/tipoDocumentoController.php");
$obj = new tipoDocumentoController();
$obj->guardar($_POST['nombre']);

?>
<?php } else{ header('location:../login.php'); } ?>