<?php

class productoModel{
    private $PDO;

    public function __construct()
    {
        require_once("c://xampp/htdocs/laparisinamvc/config/db.php");
        $con = new db();
        $this->PDO = $con->conexion();
    }

    public function insertar($idCategoria, $nombre, $descripcion, $precio)
    {
        $stament = $this->PDO->prepare("INSERT INTO producto (idCategoria, Nombre, Descripcion, Precio) VALUES(:idCategoria, :nombre, :descripcion, :precio)");
        $stament->bindParam(":idCategoria",$idCategoria, PDO::PARAM_INT);
        $stament->bindParam(":nombre",$nombre, PDO::PARAM_STR);
        $stament->bindParam(":descripcion", $descripcion, PDO::PARAM_STR);
        $stament->bindParam(":precio",$precio, PDO::PARAM_INT);
        return ($stament->execute()) ? $this->PDO->lastInsertId() : false;
    }

    public function show($id){
        $stament = $this->PDO->prepare("SELECT * FROM producto where idProducto = :id limit 1");
        $stament->bindParam(":id", $id);
        return ($stament->execute()) ? $stament->fetch() : false ;
    }

    /*public function index(){
        $stament = $this->PDO->prepare("SELECT * FROM producto");
        return ($stament->execute()) ? $stament->fetchAll(): false;
    }*/

    public function index(){
        $stament = $this->PDO->prepare("SELECT p.idProducto, c.Nombre AS category, p.Nombre, p.Descripcion, p.Precio FROM producto AS p INNER JOIN categoria AS c ON p.idCategoria=c.idCategoria");
        return ($stament->execute()) ? $stament->fetchAll(): false;
    }
    

    public function update($id,$idCategoria, $nombre, $descripcion, $precio){
        $stament = $this->PDO->prepare("UPDATE producto SET idCategoria = :idCategoria, Nombre = :nombre, Descripcion = :descripcion, Precio = :precio WHERE idProducto = :id");
        $stament->bindParam(":idCategoria",$idCategoria);
        $stament->bindParam(":nombre",$nombre);
        $stament->bindParam(":descripcion",$descripcion);
        $stament->bindParam(":precio",$precio);
        $stament->bindParam(":id",$id);
        return ($stament->execute()) ? $id : false ;
    }

    public function delete($id){
        $stament = $this->PDO->prepare("DELETE FROM producto WHERE idProducto = :id");
        $stament->bindParam(":id",$id);
        return ($stament->execute()) ? true : false ;
    }

    /*public function obtenerCategorias(){
        $stament = $this->PDO->prepare("SELECT * FROM categoria");
        return ($stament->execute()) ? $stament->fetchAll(): false;
    }*/
    
    /*public function getCategorias() {
        $query = "SELECT * FROM categoria";
        $result = $this->PDO->query($query);
        return ($result->rowCount() > 0) ? $result->fetchAll(PDO::FETCH_ASSOC) : false;
    }*/
    
}

?>