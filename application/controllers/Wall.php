<?php
defined('BASEPATH') OR exit('No direct script access allowed');
session_start();

class Wall extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $data['title'] = '';
    $method = $this->router->fetch_method();
    if(!isset($_SESSION["comment_user"]) && $method != 'login'){
      redirect('wall/login');
    }
  }

  function index()
  {
    $this->load->view('templates/top');
    $this->load->view('admin/start');
    $this->load->view('templates/footer');

  }



  function login(){
    $data['title'] = "Ingrese sus credenciales";
    $this->load->view('templates/top');
    $this->load->view('admin/login');
    $this->load->view('templates/footer');

  }
  function register(){
    $this->load->view('templates/top');
    $this->load->view('admin/register');
    $this->load->view('templates/footer');

  }
  //This function logs out the user
  function logout(){
    unset($_SESSION['comment_user']);
    redirect(wall);
  }
  //Esta funcion borra los anuncios seleccionados.
  function delete($idAnuncio=0){
    if($idAnuncio == 0){
      redirect('wall');
    }
    //Aqui se declara una instancia de Codeigniter y despues se procede a borrar el anuncio.
    $CI =& get_instance();
    $CI->db->delete('anuncios', array('id' => $idAnuncio));
    $sql = "select * from anuncios where id =?";

  $rs =   $CI->db->query($sql, array($idAnuncio));
  $rs = $rs->result();
  $rs = $rs[0];
  $fullPath = $_SERVER['DOCUMENT_ROOT']."/admin/images/".$rs->imagen;
    unlink($url);
    redirect('wall');
  }
//This function edits the current comment
  function edit(){
    $commentId = $this->uri->segment(3);
    $f = new stdClass();
    $f->comment = urldecode($this->uri->segment(4));
    if($commentId == 0){
      redirect('wall');
    }
    $CI =& get_instance();
    $CI->db->where('id',$commentId);
    $CI->db->update('commentary',$f);
    redirect('wall');

  }
  //This will insert all the data of the response
  function insertResponse(){
    $f = new stdClass();
    $f->idUserRespond = $this->uri->segment(4);
    $f->idCommentary = $this->uri->segment(3);
    $f->currentUser = $this->uri->segment(5);
    $f->comment = urldecode($this->uri->segment(6));
    $CI =& get_instance();
    $CI->db->insert('respondcommentary',$f);
    redirect('wall');
  }

}
