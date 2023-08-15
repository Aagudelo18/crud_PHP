<?php

    class productoController{
        private $productoModel;
        private $categoriaModel;

        public function __construct()
        {
            require_once("c://xampp/htdocs/laparisinamvc/model/productoModel.php");
            $this->productoModel = new productoModel();
            require_once("c://xampp/htdocs/laparisinamvc/model/categoriaModel.php");
            $this->categoriaModel = new categoriaModel();
        }

        public function guardar($idCategoria, $nombre, $descripcion, $precio)
        {
            $id = $this->productoModel->insertar($idCategoria, $nombre, $descripcion, $precio);
            return ($id!=false) ? header("Location:show.php?id=".$id) : header("Location:create.php");
        }

        public function show($id){
            return ($this->productoModel->show($id)) != false ? $this->productoModel->show($id) : header('Location: index.php') ;
        }

        public function index(){
            return ($this->productoModel->index()) ? $this->productoModel->index() : false ;
        }

        public function update($id, $idCategoria, $nombre, $descripcion, $precio){
            return ($this->productoModel->update($id, $idCategoria, $nombre, $descripcion, $precio) != false) ? header("Location:show.php?=id=" . $id) 
            : header("Location:index.php");
        }

        public function delete($id){
            return ($this->productoModel->delete($id)) ? header("Location:index.php") : 
            header("Location:show.php?id=".$id) ;
        }

        public function listarCategorias() {
            $categorias = $this->categoriaModel->obtenerCategorias();
            // Procesar las categorías obtenidas, por ejemplo, mostrarlas en una vista
            return $categorias;
            
        }

        /*public function agregarProducto() {
            require_once('model/productoModel.php');
            $productoModel = new productoModel();
            $categorias = $productoModel->getCategorias();
            require_once('view/producto/create.php');
        }*/
        
    }

?>