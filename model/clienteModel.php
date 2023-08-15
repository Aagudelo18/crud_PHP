<?php 

class clienteModel{ 
    private $PDO;

    public function __construct()
    {
        require_once("C://xampp/htdocs/laparisinamvc/config/db.php");
        $con = new db();
        $this->PDO = $con->conexion();
    }

    public function insertar($documentos,$nombre,$documento,$direccion,$telefono)
    {
         $stament = $this->PDO->prepare("INSERT INTO cliente (idTipodocumento,Nombre,Documento,Direccion,Telefono) 
          VALUES(:documentos, :nombre, :documento, :direccion, :telefono)");
          $stament->bindParam(":documentos",$documentos, PDO::PARAM_INT);
          $stament->bindParam(":nombre",$nombre, PDO::PARAM_STR);
          $stament->bindParam(":documento",$documento, PDO::PARAM_STR);
          $stament->bindParam(":direccion",$direccion, PDO::PARAM_STR);
          $stament->bindParam(":telefono",$telefono, PDO::PARAM_STR);
          return ($stament->execute()) ? $this->PDO->lastInsertId() : false;
    }

    public function show($id){
        $stament = $this->PDO->prepare("SELECT * FROM cliente where idCliente = :id limit 1");
        $stament->bindParam(":id", $id);
        return ($stament->execute()) ? $stament->fetch() : false;
    }

    public function index(){
        $stament = $this->PDO->prepare("SELECT c.idCliente, c.Nombre, c.Documento, c.Direccion, c.Telefono, t.Nombre AS nombredocumento FROM cliente AS c INNER JOIN  tipodocumento AS t
        ON c.idTipodocumento=t.idTipodocumento");
        return ($stament->execute()) ? $stament->fetchAll(): false;
    }

    public function update($id,$documentos, $nombre,$documento,$direccion,$telefono)
    {
        $stament = $this->PDO->prepare("UPDATE cliente SET idTipodocumento=:documentos, Nombre =:nombre,Documento = :documento,Direccion =:direccion,Telefono= :telefono WHERE idCliente = :id");
        $stament->bindParam(":id",$id );
        $stament->bindParam(":documentos",$documentos);
        $stament->bindParam(":nombre",$nombre );
        $stament->bindParam(":documento",$documento);
        $stament->bindParam(":direccion",$direccion );
        $stament->bindParam(":telefono",$telefono );
          return ($stament->execute()) ? $id : false;
    }

    public function delete($id){
        $stament = $this->PDO->prepare("DELETE FROM cliente WHERE idCliente = :id");
        $stament->bindParam(":id",$id );
        return ($stament->execute()) ? true : false;

    } 
    public function obtenerTipodocumento(){
        $stament = $this->PDO->prepare("SELECT * FROM tipodocumento");
        return ($stament->execute()) ? $stament->fetchAll() : false;
    }
    public function agregarTipodocumento(){
        require_once('model/clienteModel.php');
        $clienteModel = new clienteModel();
        $tipodocumento = $clienteModel->getTipodocumento();
        require_once('view/cliente/create.php');
    }
   
}



?>