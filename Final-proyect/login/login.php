<?php
$correo = $_POST["correo"];
$password =  $_POST ["password"];

$conexion = mysql_connect("localhost","root","oliver0303");
mysql_select_db("biciusers",$conexion);

$password = md5($password);
$sql="SELECT id FROM registro WHERE correo = '$correo' AND contraseña ='$password'";
$comprobar = mysql_query($sql);

if (mysql_num_rows($comprobar) > 0){


$id = mysql_result($comprobar,0);
setcookie ("misitio_userid","id",time() +3600);
echo 'sesion iniciada correctamente';
}else {
  echo "usuario o contrase;a invalida";
}
 ?>
