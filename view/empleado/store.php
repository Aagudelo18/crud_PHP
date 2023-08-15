<?php 

require_once("C://xampp/htdocs/laparisinamvc/controller/empleadosController.php");
$obj = new empleadosController();
$obj->guardar($_POST['documentos'],$_POST['nombre'],$_POST['cedula'],$_POST['cargo']);

?>