<?php 

class clienteController{
    private $clienteModel;
    private $documentoModel; 

    public function __construct()
    {
        require_once("C://xampp/htdocs/laparisinamvc/model/clienteModel.php");
        $this->clienteModel = new clienteModel();
        require_once("C://xampp/htdocs/laparisinamvc/model/tipoDocumentoModel.php");
        $this->documentoModel = new tipoDocumentoModel();

        
    }

public function guardar($documentos,$nombre,$documento,$direccion,$telefono)
{
    $id = $this->clienteModel->insertar($documentos,$nombre,$documento,$direccion,$telefono);
    return ($id !=false) ? header("Location:show.php?id=".$id) : header("Location:create.php");
}

public function show($id){
    return ($this->clienteModel->show($id)) != false ? $this->clienteModel->show($id) : header("Location: index.php");
}

public function index(){
    return ($this->clienteModel->index()) ? $this->clienteModel->index() : false ;
}

public function update($id,$documentos,$nombre,$documento,$direccion,$telefono )
{
    return($this->clienteModel->update($id,$documentos, $nombre,$documento,$direccion,$telefono) != false )? header("Location:show.php?=id".$id) : header("Location:index.php");
}

public function delete($id){
    return ($this->clienteModel->delete($id)) ? header("Location:index.php") : header("Location:show.php?id=".$id); 
}
public function listardocumentos(){
    $documentos = $this->documentoModel->obtenerTipodocumento();
    return $documentos;
}

public function agregarTipodocumento(){
    require_once('clienteModel/clienteModel.php');
    $clienteModel = new clienteModel();
    $tipodocumento = $clienteModel->getTipodocumento();
    require_once('view/cliente/create.php');
}
 

}


?>