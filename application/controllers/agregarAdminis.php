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


function eliminarusuario(){
  $this->load-> view('templates/top');
$this->load->view('admin/eliminar');
    $this->load->view('templates/footer');

}
}
