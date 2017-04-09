<?php



  require('conexion.php');
$id=$_GET['id'];
$query="SELECT usuario , password, email FROM usuarios WHERE id ='$id'";
$resultado=$mysqli->query($query);

$row=$resultado->fetch_assoc();

if($_POST){
$idPost = $_POST['id'];
}
     ?>


<html>

<head>
  <title> Usuarios </title>

</head>
<body>


  <center> <h1> Modificar Usuarios </center> <h1>

<form name="modificar_usuario" method="POST" action="<?php echo base_url('agregarAdminis/modificarusuario2')?>">

  <table width="50%">
    <tr>

      <input type="hidden" name="id" value="<?php echo $id;?>">
      <td width="20"> <b> Usuario </b> </td>

      <td width="30"> <input type="text" Name="usuario" size="25" value="<?php echo $row['usuario'];?>"/>
      </td>
    </tr>

    <tr>

      <td><b> Password</b></td>
      <td> <input type="password" name="password" size="25" value="<?php echo $row['password'];?>"/>
      </td>
</tr>
<tr>
      <td><b>Email</b></td>
      <td> <input type="email" name="email" size="25" value="<?php echo $row['email'];?>"/>
      </td>
</tr>
    </tr>

    <td colspan="2" <center> <input type="submit" name="Guardar" value="Guardar"/> </center> </td>
  </tr>
</table>
</form>
</body>

</html>
