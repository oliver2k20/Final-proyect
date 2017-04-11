<?php
require('conexion.php');
//Muestra los anuncios clasificados por categorias
$query = "SELECT * FROM anuncios where id_categoria = ".$id;
$result = $mysqli->query($query);
while($row=$result->fetch_assoc()) {
  $fullPath = base_url('').'images/'.$row['imagen'];
  $url = base_url('');
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
