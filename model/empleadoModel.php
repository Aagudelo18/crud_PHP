<?php 

class empleadoModel{
    private $PDO;
 
    public function __construct()
    {
        require_once("C://xampp/htdocs/laparisinamvc/config/db.php");
        $con = new db();
        $this->PDO = $con->conexion();
    }

    public function insertar($documentos,$nombre,$cedula,$cargo)
    {
         $stament = $this->PDO->prepare("INSERT INTO empleados (idTipodocumento,Nombre,Cedula,Cargo) VALUES(:documentos,:nombre, :cedula, :cargo)");
          $stament->bindParam(":documentos",$documentos, PDO::PARAM_INT);
          $stament->bindParam(":nombre",$nombre, PDO::PARAM_STR);
          $stament->bindParam(":cedula",$cedula, PDO::PARAM_STR);
          $stament->bindParam(":cargo",$cargo, PDO::PARAM_STR);
          return ($stament->execute()) ? $this->PDO->lastInsertId() : false;
    }

    public function show($id){
        $stament = $this->PDO->prepare("SELECT * FROM empleados where idEmpleados = :id limit 1");
        $stament->bindParam(":id", $id);
        return ($stament->execute()) ? $stament->fetch() : false;
    }

    public function index(){
        $stament = $this->PDO->prepare("SELECT e.idEmpleados, e.Nombre, e.Cedula, e.Cargo, t.Nombre AS nombredocumento FROM empleados AS e INNER JOIN  tipodocumento AS t
        ON e.idTipodocumento=t.idTipodocumento");
        return ($stament->execute()) ? $stament->fetchAll(): false;
    }

    public function update($id,$documentos, $nombre,$cedula,$cargo)
    {
        $stament = $this->PDO->prepare("UPDATE empleados SET  idTipodocumento=:documentos, Nombre =:nombre,Cedula = :cedula,Cargo =:cargo WHERE idEmpleados = :id");
        $stament->bindParam(":id",$id );
        $stament->bindParam(":documentos",$documentos);
        $stament->bindParam(":nombre",$nombre );
        $stament->bindParam(":cedula",$cedula);
        $stament->bindParam(":cargo",$cargo );
          return ($stament->execute()) ? $id : false;
    }

    public function delete($id){
        $stament = $this->PDO->prepare("DELETE FROM empleados WHERE idEmpleados = :id");
        $stament->bindParam(":id",$id );
        return ($stament->execute()) ? true : false;

    }
    public function obtenerTipodocumento(){
        $stament = $this->PDO->prepare("SELECT * FROM tipodocumento");
        return ($stament->execute()) ? $stament->fetchAll() : false;
    }

}



?>