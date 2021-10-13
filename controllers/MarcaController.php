<?php

include_once('views/MarcaView.php');
include_once('models/MarcaModel.php');


class MarcaController {

    private $model;
    private $view;

    public function __construct() {
        $this->model = new MarcaModel();
        $this->view = new MarcaView();
    }

    public function getMarcas() {
        $listado = $this->model->getAll();
        return $listado;
    }

    function showMarcas() {

           $listaMarcas = $this->model->getAll();
           $this->view->showMarcas($listaMarcas);
    }  



 public function deleteMarca($id)
 {   
         $this->model->deleteMarca($id);
         header("Location: " . BASE_URL . 'home');
 }

 public function showFormMarca() {
     $this->view->showFormMarca(null);
 }    
 public function showEditMarca($id) {
     $this->view->showEditMarca(null, $id);
 }    

 public function addMarca() {
     $nombre= $_POST['F_marca'];
     $this->model->addMarca($nombre);
     header("Location: " . BASE_URL . 'home');
 }
     
 public function modificarMarca($id){
     $nombre= $_POST['F_marca'];
     $this->model->modificarMarca($nombre, $id);
     header("Location: " . BASE_URL . 'home');
 }

  
}