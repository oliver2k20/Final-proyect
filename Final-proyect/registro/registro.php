<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$pais = $_POST['pais'];
$correo = $_POST['correo'];
$password = $_POST['password'];
$rpassword = $_POST['rpassword'];

$reqlen = strlen($password) * strlen ($rpassword) * strlen($nombre) * strlen($apellido) * strlen($correo) * strlen($pais);

if ($reqlen> 0) {

  if ($password === $rpassword) {
 require("connect_db.php");
 $password = md5($password);
 mysql_query("INSERT INTO registro VALUE('','$nombre','$apellido','$pais','$correo','$password')");
 echo 're ha registrado correctamente';
  } else {

    echo 'Por favor coloque dos contrase;as iguales';
  }




} else {

  echo 'Por favor rellene los campos requeridos';
}



 ?>
