<?php 

require_once("C://xampp/htdocs/laparisinamvc/controller/clienteController.php");
$obj = new clienteController();
$obj->update($_POST['id'], $_POST['documentos'], $_POST['nombre'],$_POST['documento'],$_POST['direccion'],$_POST['telefono']);

?>