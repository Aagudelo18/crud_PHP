<?php
session_start();
if (isset($_SESSION["usuario"])){
    ?>
<?php 
require_once("C://xampp/htdocs/laparisinamvc/controller/tipoDocumentoController.php");
$obj = new tipoDocumentoController();
$obj->delete($_GET['id']);
?>
<?php } else{ header('location:../login.php'); } ?>