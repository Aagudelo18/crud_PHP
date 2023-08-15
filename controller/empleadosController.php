<?php 

class empleadosController{
    private $empleadoModel;
    private $documentoModel;

    public function __construct()
    {
        require_once("C://xampp/htdocs/laparisinamvc/model/empleadoModel.php");
        $this->empleadoModel = new empleadoModel();
        require_once("C://xampp/htdocs/laparisinamvc/model/tipoDocumentoModel.php");
        $this->documentoModel = new tipoDocumentoModel();
        
    }

public function guardar($documentos,$nombre,$cedula,$cargo)
{
    $id = $this->empleadoModel->insertar($documentos,$nombre,$cedula,$cargo);
    return ($id !=false) ? header("Location:show.php?id=".$id) : header("Location:create.php");
}

public function show($id){
    return ($this->empleadoModel->show($id)) != false ? $this->empleadoModel->show($id) : header("Location: index.php");
}

public function index(){
    return ($this->empleadoModel->index()) ? $this->empleadoModel->index() : false ;
}

public function update($id,$documentos,$nombre,$cedula,$cargo )
{
    return($this->empleadoModel->update($id,$documentos,$nombre,$cedula,$cargo) != false )? header("Location:show.php?=id".$id) : header("Location:index.php");
} 

public function delete($id){
    return ($this->empleadoModel->delete($id)) ? header("Location:index.php") : header("Location:show.php?id=".$id); 
}
public function listardocumentos(){
    $documentos = $this->documentoModel->obtenerTipodocumento();
    return $documentos;
}

public function agregarTipodocumento(){
    require_once('empleadoModel/empleadoModel.php');
    $empleadoModel = new empleadoModel();
    $tipodocumento = $empleadoModel->getTipodocumento();
    require_once('view/empleado/create.php');
}

}


?>