<?php

require('conexion.php');

$query="SELECT * FROM usuarios";

$resultado=$mysqli->query($query);

?>


<html>

<head>

  <title> Usuarios </title>
</head>
  <body>

    <center> <h1> Usuarios </center> </h1>
    <a href="<?php echo base_url('wall/index')?>"> Volver a la pagina principal </a>
<p> </p>
    <a href="<?php echo base_url('agregarAdminis/usuarionuevo')?>"> Nuevo Usuario </a>
    <p></p>

<table border=1 width="80%">

  <thead>
    <tr>
      <td><b> Usuarios</b> </td>
        <td><b> Email</b> </td>
        <td></td>
    <td></td>

    <tbody>
      <?php while ($row=$resultado->fetch_assoc()){
      ;?>
<tr>
  <td> <?php echo $row['usuario'];?>
  </td>
  <td>
    <?php echo $row['email'];?>
  </td>
  <td>
<a href="<?php echo base_url('agregarAdminis/modificarusuario')?>?id=<?php echo $row['id'];?>">Modificar</a>
</td>
<td>
<a href="<?php echo base_url('agregarAdminis/eliminarusuario')?>?id=<?php echo $row['id'];?>">Eliminar</a>
</td>
</tr>

<?php } ?>
<tbody>
</table>
</body>
</html>
