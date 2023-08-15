<?php

class pedidoModel{
    private $PDO;

    public function __construct()
    {
        require_once("c://xampp/htdocs/laparisinamvc/config/db.php");
        $con = new db();
        $this->PDO = $con->conexion();
    }

    public function insertar($cantidad, $FechaEntrega,$Precio)
    {
        $stament = $this->PDO->prepare("INSERT INTO pedido (cantidad, FechaEntrega, Precio) VALUES(:cantidad, :FechaEntrega, :Precio)");
        $stament->bindParam(":cantidad",$cantidad, PDO::PARAM_INT);
        $stament->bindParam(":FechaEntrega", $FechaEntrega, PDO::PARAM_STR);
        $stament->bindParam(":Precio", $Precio, PDO::PARAM_INT);
        return ($stament->execute()) ? $this->PDO->lastInsertId() : false;
    }

    public function show($id){
        $stament = $this->PDO->prepare("SELECT * FROM pedido where idPedido = :id limit 1");
        $stament->bindParam(":id", $id);
        return ($stament->execute()) ? $stament->fetch() : false ;
    }

    public function index(){
        $stament = $this->PDO->prepare("SELECT * FROM pedido");
        return ($stament->execute()) ? $stament->fetchAll(): false;
    }

    public function update($id, $cantidad,$FechaEntrega,$Precio){
        $stament = $this->PDO->prepare("UPDATE pedido SET Cantidad = :cantidad, FechaEntrega = :FechaEntrega, Precio = :Precio WHERE idPedido = :id");
        $stament->bindParam(":cantidad",$cantidad);
        $stament->bindParam(":FechaEntrega",$FechaEntrega);
        $stament->bindParam(":Precio",$Precio);
        $stament->bindParam(":id",$id);
        return ($stament->execute()) ? $id : false ;
    }

    public function delete($id){
        $stament = $this->PDO->prepare("DELETE FROM pedido WHERE idPedido = :id");
        $stament->bindParam(":id",$id);
        return ($stament->execute()) ? true : false ;
    }

    /*public function obtenerCategorias(){
        $stament = $this->PDO->prepare("SELECT * FROM categoria");
        return ($stament->execute()) ? $stament->fetchAll(): false;
    }*/

    
    
    
    
}



?>