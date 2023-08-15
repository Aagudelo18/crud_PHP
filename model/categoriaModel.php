<?php

class categoriaModel{
    private $PDO;

    public function __construct()
    {
        require_once("c://xampp/htdocs/laparisinamvc/config/db.php");
        $con = new db();
        $this->PDO = $con->conexion();
    }

    public function insertar($nombre, $descripcion)
    {
        $stament = $this->PDO->prepare("INSERT INTO categoria (Nombre, Descripcion) VALUES(:nombre, :descripcion)");
        $stament->bindParam(":nombre",$nombre, PDO::PARAM_STR);
        $stament->bindParam(":descripcion", $descripcion, PDO::PARAM_STR);
        return ($stament->execute()) ? $this->PDO->lastInsertId() : false;
    }

    public function show($id){
        $stament = $this->PDO->prepare("SELECT * FROM categoria where idCategoria = :id limit 1");
        $stament->bindParam(":id", $id);
        return ($stament->execute()) ? $stament->fetch() : false ;
    }

    public function index(){
        $stament = $this->PDO->prepare("SELECT * FROM categoria");
        return ($stament->execute()) ? $stament->fetchAll(): false;
    }

    public function update($id, $nombre, $descripcion){
        $stament = $this->PDO->prepare("UPDATE categoria SET Nombre = :nombre, Descripcion = :descripcion WHERE idCategoria = :id");
        $stament->bindParam(":nombre",$nombre);
        $stament->bindParam(":descripcion",$descripcion);
        $stament->bindParam(":id",$id);
        return ($stament->execute()) ? $id : false ;
    }

    public function delete($id){
        $stament = $this->PDO->prepare("DELETE FROM categoria WHERE idCategoria = :id");
        $stament->bindParam(":id",$id);
        return ($stament->execute()) ? true : false ;
    }

    /*public function obtenerCategorias(){
        $stament = $this->PDO->prepare("SELECT * FROM categoria");
        return ($stament->execute()) ? $stament->fetchAll(): false;
    }*/

    public function obtenerCategorias(){
        $sqlProductos = "SELECT p.idProducto, p.Nombre, p.Descripcion, p.Precio, c.Nombre AS category  FROM producto AS p INNER JOIN categoria AS c
        ON p.idCategoria=c.idCategoria";
        $productos = $this->PDO->query($sqlProductos);
        return $productos;
    }

    
    
    
}



?>