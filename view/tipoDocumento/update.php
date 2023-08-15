<?php 

require_once("C://xampp/htdocs/laparisinamvc/controller/tipoDocumentoController.php");
$obj = new tipoDocumentoController();
$obj->update($_POST['id'], $_POST['nombre']);

?>