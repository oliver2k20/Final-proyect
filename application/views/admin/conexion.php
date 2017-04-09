<?php
$mysqli= new mysqli("localhost","root", "123456dar","admin");


if(mysqli_connect_errno()){
   echo 'Conexion Fallida:', mysqli_connect_error();
   exit();
}


   ?>
