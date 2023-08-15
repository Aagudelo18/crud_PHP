<?php 

require_once("C://xampp/htdocs/laparisinamvc/controller/empleadosController.php");
$obj = new empleadosController();
$obj->delete($_GET['id']);

?>