<?php 

class tipoDocumentoModel{
    private $PDO;

    public function __construct()
    {
        require_once("C://xampp/htdocs/laparisinamvc/config/db.php");
        $con = new db();
        $this->PDO = $con->conexion();
    }

    public function insertar($nombre)
    {
         $stament = $this->PDO->prepare("INSERT INTO tipodocumento (Nombre) VALUES(:nombre)");
          $stament->bindParam(":nombre",$nombre, PDO::PARAM_STR);
          return ($stament->execute()) ? $this->PDO->lastInsertId() : false;
    }

    public function show($id){
        $stament = $this->PDO->prepare("SELECT * FROM tipodocumento where idTipodocumento = :id limit 1");
        $stament->bindParam(":id", $id);
        return ($stament->execute()) ? $stament->fetch() : false;
    }

    public function index(){
        $stament = $this->PDO->prepare("SELECT * FROM tipodocumento");
        return ($stament->execute()) ? $stament->fetchAll(): false;
    }

    public function update($id, $nombre)
    {
        $stament = $this->PDO->prepare("UPDATE tipodocumento SET Nombre =:nombre WHERE idTipodocumento = :id");
        $stament->bindParam(":id",$id );
        $stament->bindParam(":nombre",$nombre );
          return ($stament->execute()) ? $id : false;
    }

    public function delete($id){
        $stament = $this->PDO->prepare("DELETE FROM tipodocumento WHERE idTipodocumento = :id");
        $stament->bindParam(":id",$id );
        return ($stament->execute()) ? true : false;

    }

    public function obtenerTipodocumento(){
        $stament = $this->PDO->prepare("SELECT * FROM tipodocumento");
        return ($stament->execute()) ? $stament->fetchAll() : false;
    }


}



?>