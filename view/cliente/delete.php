<?php 

require_once("C://xampp/htdocs/laparisinamvc/controller/clienteController.php");
$obj = new clienteController();
$obj->delete($_GET['id']);

?>