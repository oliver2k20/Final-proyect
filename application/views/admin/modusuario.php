<?php
require('conexion.php');


$resultado = "";
if($_POST){
$id=$_POST['id'];
$usuario=$_POST['usuario'];
$password=$_POST['password'];
$email=$_POST['email'];

$query="UPDATE usuarios SET usuario='$usuario',password='$password',email='$email' WHERE id='$id'";


$resultado= $mysqli->query($query);

}

    ?>


    <html>
    <head>
<title> Modificar Usuario </title>

      </head>

      <body>

      <center>

          <?php if ($resultado>0) {



           ?>
    <h1>  Usuario Modificado Correctamente !!</h1>

    <?php } else{?>

      <h1> Error al modificar usuario </h1>
      <?php } ?>

      <p> </p>

      <a href="<?php echo base_url('agregarAdminis/index')?>"> Regresar </a>

    </center>
  </body>
  </html>
