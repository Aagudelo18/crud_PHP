<?php

    class pedidoController{
        private $model;

        public function __construct()
        {
            require_once("c://xampp/htdocs/laparisinamvc/model/pedidoModel.php");
            $this->model = new pedidoModel();
        }

        public function guardar($cantidad,$FechaEntrega,$Precio)
        {
            $id = $this->model->insertar($cantidad,$FechaEntrega,$Precio);
            return ($id!=false) ? header("Location:show.php?id=".$id) : header("Location:create.php");
        }

        public function show($id){
            return ($this->model->show($id)) != false ? $this->model->show($id) : header('Location: index.php') ;
        }

        public function index(){
            return ($this->model->index()) ? $this->model->index() : false ;
        }

        public function update($id, $cantidad,$FechaEntrega,$Precio){
            return ($this->model->update($id, $cantidad,$FechaEntrega,$Precio) != false) ? header("Location:show.php?=id=" . $id) 
            : header("Location:index.php");
        }

        public function delete($id){
            return ($this->model->delete($id)) ? header("Location:index.php") : 
            header("Location:show.php?id=".$id) ;
        }
    }

?>