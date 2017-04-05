  <?php
//This is to insert my commentary to the database
$currentUser = $_SESSION['comment_user'];
$commentUser = '';
$CI =& get_instance();
if($_POST){
  $com = new stdClass();
  $com->comment = $_POST['commentary'];
  $com->idUser = $currentUser->id;
  $CI->db->insert('commentary',$com);
}

 ?>
 <style>

 body{background-color:black}

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

 <div class="container">
 <div class="row">
   <div class="col-sm-3">
     <div class="sidebar-nav">
       <div class="navbar navbar-default" role="navigation">
         <div class="navbar-header">
           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
             <span class="sr-only">Toggle navigation</span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
           </button>
           <span class="visible-xs navbar-brand">Sidebar menu</span>
         </div>
         <div class="navbar-collapse collapse sidebar-navbar-collapse">
           <ul class="nav navbar-nav">
             <li class="active"><a href="<?php echo base_url('wall/login')?>">Login</a></li>
             <li><a href="#">Nosotros</a></li>
             <li><a href="<?php echo base_url('wall/micuenta')?>">Mi Cuenta</a></li>
             <li><a href="<?php echo base_url('register')?>">Registros</a></li>
             <li><a href="#">Anuncios <span class="badge">1,118</span></a></li>
           </ul>
         </div><!--/.nav-collapse -->
       </div>
     </div>
   </div>

 </div>
 </div>
