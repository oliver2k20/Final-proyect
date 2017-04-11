<?php
require('conexion.php');
$query = "SELECT * FROM categorias";
$result = $mysqli->query($query);
//Mostrar las categorias
$url = base_url('agregarAdminis/anunciosByCategoria');
while($row = $result->fetch_assoc()){
  echo "<a href='{$url}/{$row['id']}'><div class='row'>
        <div class='col-sm-6 col-sm-offset-3'>
        <div class='panel panel-default'>
          <div class='panel-heading'>
          <h2>{$row['nombre']}</h2>
          </div>
          </div>
        </div>
  </div></a>";
}

 ?>
