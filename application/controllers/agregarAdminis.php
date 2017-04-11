<?php
session_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class agregarAdminis extends CI_Controller{

  public function __construct()
  {

    parent::__construct();

  }

  function index()
  {
    $this->load->view('templates/top');
    $this->load->view('admin/agregarAdministradores');
    $this->load->view('templates/footer');
  }

  function usuarionuevo (){
    $this->load-> view('templates/top');
$this->load-> view('admin/nuevo');
      $this->load->view('templates/footer');


  }
  function nuevoregistros(){
    $this->load-> view('templates/top');
$this->load->view('admin/guardausuario');
      $this->load->view('templates/footer');

  }
  function modificarusuario(){
    $this->load-> view('templates/top');
  $this->load->view('admin/modificar');
      $this->load->view('templates/footer');


  }
  function modificarusuario2(){
    $this->load-> view('templates/top');
  $this->load->view('admin/modusuario');
      $this->load->view('templates/footer');
  }

//esta funcion elimina el usuario
function eliminarusuario(){
  $this->load-> view('templates/top');
$this->load->view('admin/eliminar');
    $this->load->view('templates/footer');

}
function vistas(){
  $this->load-> view('templates/top');
$this->load->view('admin/anuncios');
    $this->load->view('templates/footer');


}
//Conseguir anuncios por categoria
function anunciosByCategoria($id =0){
  if($id == 0){
    redirect("agregarAdminis");
  }
  $d  = array();
  $d['id'] = $id;
  $this->load-> view('templates/top');
$this->load->view('admin/anunciosporCategoria',$d);
    $this->load->view('templates/footer');
}
//Muestra las vista de categoria
function categoria(){
  $this->load-> view('templates/top');
  $this->load->view('admin/categorias');
    $this->load->view('templates/footer');



}



}
