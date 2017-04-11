  <?php
//This is to insert my commentary to the database
$currentUser = $_SESSION['comment_user'];
require('conexion.php');
$CI =& get_instance();
$sql = "select * from anuncios";
$result = $mysqli->query($sql);
if($_POST){
var_dump($_POST);
$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$imagen= $_FILES['photo'];
$imgContent = $imagen['name'];
$categoria = $_POST['categoria'];
$sql = "SELECT * FROM categorias WHERE nombre=?";
$rs = $CI->db->query($sql,array($categoria));
$rs = $rs->result();
$rs = $rs[0];
$idUser = $currentUser->id;

$path = $_SERVER['DOCUMENT_ROOT']."/admin/images/";

if($imagen["error"] == 0 &&($imagen['type'] == 'image/png' || $imagen['type'] == 'image/jpeg')){
  $idCate = $rs->id;
  move_uploaded_file($imagen['tmp_name'],"$path"."$imgContent");
  $query="INSERT INTO anuncios (titulo,descripcion,idUser,imagen,id_categoria) VALUES('$titulo','$descripcion','$idUser','$imgContent','$idCate')";
  var_dump($query);
  $result=$mysqli->query($query);
}



}




if ($result) {


  echo 'funciona';

} else {
  echo 'no funciona';
}


 ?>
 <style>



 @media (min-width: 768px) {
   .sidebar-nav .navbar .navbar-collapse {
     padding: 0;
     max-height: none;
   }
   .sidebar-nav .navbar ul {
     float: none;
     display: block;
     left:0px, top:0px;
   }
   .sidebar-nav .navbar li {
     float: none;
     display: block;
   }
   .sidebar-nav .navbar li a {
     padding-top: 12px;
     padding-bottom: 12px;
   }
 }
 </style>





 <div class="text-right">
  <!-- This is to know who is accessing at the moment -->
   <p>Usted ha ingresado como <?php echo  $currentUser->email?> <a href="<?php echo base_url('wall/logout') ?>">| Salir |</a></p>
 </div>
     <img src="<?php echo base_url('') ?>logo.png" alt="logo">


 <div class="container-fluid">

       <nav class="navbar navbar-inverse navbar-fixed-side">

           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
             <span class="sr-only">Toggle navigation</span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
           </button>
           <div class="navbar-header">
              <a href="#" class="navbar-brand">ITLA BIK3! </a>
           </div>



         <div class="navbar-collapse collapse sidebar-navbar-collapse">
           <ul class="nav navbar-nav navbar-left">
             <li><a href="<?php echo base_url('wall/login')?>">Acceder con otra cuenta !</a></li>
             <li><a href="<?php echo base_url('')?>"></a></li>
             <li><a href="<?php echo base_url('agregarAdminis/categoria')?>">Categorias</a>
             <li><a href="#">Anuncios Publicados </a> <span class="badge"><?php echo count($result) ?></span></li>
             <li><a href="<?php echo base_url('agregarAdminis/vistas') ?>">Publicar Banners </a></li>
             <li><a href="<?php echo base_url('agregarAdminis/index')?>">agregarAdministrador</a> </li>
           </ul><!--/.nav-collapse -->
         </div>
      </nav>
      </div>
      <h1>Últimos Anuncios</h1>
 <?php

 $sql = "select * from anuncios";
 $result = $mysqli->query($sql);



while($row=$result->fetch_assoc()) {
  $fullPath = base_url('').'images/'.$row['imagen'];
  $url = base_url('');
  //buscar todas los anuncios y mostrarlos en la vista
  echo "<div class='row'>
        <div class='col-sm-6 col-sm-offset-3'>
        <div class='panel panel-default'>
          <div class='panel-heading'>
          {$row['titulo']}
        </div>
        <div class='panel-body'>
        <p>{$row['descripcion']}</p>
        <a href='{$url}wall/delete/{$row['id']}' class='btn btn-danger'><i class='fa fa-trash'></i></a>
        <div class='row'>
          <div class='col-sm-6 col-sm-offset-3'>

          <img src='{$fullPath}' class='img-responsive' alt='photo' />
        </div>
        </div>
        </div>
        </div>
  </div>";

}

    ?>
