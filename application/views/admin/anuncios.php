<?php
$CI =& get_instance();
$sql = "SELECT * FROM categorias";
$rs = $CI->db->query($sql);
$rs = $rs->result();
$categorias = $rs;
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Anuncios </title>
  </head>
  <body>

    <a href="<?php echo base_url('wall/index')?>">Volver Pagina Principal</a>
    <div class='row'>
    <div class="col-sm-6 col-sm-offset-3">
      <div class="jumbotron">
        <form class="form-horizontal" enctype="multipart/form-data"action="<?php echo base_url('wall/index')?>" method="POST">
          <div class="form-group input-group">
            <label for="titulo" class="input-group-addon bg-white"> <i class="fa fa-title" ></i> Titulo</label>
            <input type="text" name="titulo" class="form-control" id="titulo" required/>
          </div>
            <div class="form-group input-group">
              <label for="descripcion" class="input-group-addon bg-white"><i class="fa fa-info" ></i> Descripcion</label>
              <textarea name="descripcion" rows="4" cols="80" class="form-control"></textarea>
            </div>
            <div class="form-group input-group">
              <label for="photo" class="input-group-addon bg-white"><i class="fa fa-picture-o" aria-hidden="true"></i> Haga click aqui para Subir Foto</label>
              <input type="file" name="photo" class="form-control" id="photo"required accept="image/*" placeholder="busque su imagen"/>
            </div>
            <div class="form-group input-group">
              <label for="categoria" class="input-group-addon bg-white"><i class="fa fa-bars" aria-hidden="true"></i> Categoria</label>
              <select class="form-control" name="categoria">
                  <option value="" disabled selected>Escoja una categoría</option>
                  <?php
                  foreach ($categorias as $ct) {
                    echo "<option value='{$ct->nombre}'>{$ct->nombre}</option>";
                  }
                   ?>
              </select>
            </div>

            <div class="text-center">
              <button type="submit" class="btn bg-white" id="ingress_btn">Publicar</button>
            </div>
      </div>
    </div>
      </div>
  </body>
</html>
