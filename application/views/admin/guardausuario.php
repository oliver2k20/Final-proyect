<?php

require('conexion.php');

$resultado = "";
if($_POST){
$usuario=$_POST['usuario'];
$password=$_POST['password'];
$email=$_POST['email'];


$query="INSERT INTO usuarios (usuario,password,email) VALUES('$usuario','$password','$email')";
$resultado=$mysqli->query($query);

}

    ?>

    <html>

    <head>

      <title> Guardar Usuario</title>

    </head>

    <body>
      <center>

        <?php

        if($resultado>0){
?>
  <h1> Usuario Guardado </h1>
<?php }else {?>
  <H1> Error al guardar Usuario </h1>
    <?php } ?>



    <p></p>

    <a href="<?php echo base_url('agregarAdminis/index')?>"> Regresar </a>
</center>

</body>
</html>
