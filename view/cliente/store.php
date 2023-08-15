<?php 

require_once("C://xampp/htdocs/laparisinamvc/controller/clienteController.php");
$obj = new clienteController();
$obj->guardar($_POST['documentos'],$_POST['nombre'],$_POST['documento'],$_POST['direccion'],$_POST['telefono']);

?>