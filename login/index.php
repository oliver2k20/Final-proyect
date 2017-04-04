<!DOCTYPE html>
<html lang="en">
<head>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="styles.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

  <div class="all">
    <div class="row">
      <div class="col-md-12">
<img class="logo"src="logo3.png" alt="">

</div>
</div>

  <div class="row">
<div class="col-md-8 col-md-offset-4">


<form method="POST" action="login.php">
  <div class="input-group" style="margin:10px;">
            <span class="input-group-addon fa fa-user-circle-o" style="min-width:50px; width:50px; max-width:100px;"></span>
            <input type="email" class="form-control" required placeholder="Correo Electronico" style="min-width:300px;" name="correo">
          </div>


          <div class="input-group" style="margin:10px;">
                    <span class="input-group-addon fa fa-key" style="min-width:50px; width:50px; max-width:100px;"></span>
                    <input type="password" class="form-control" required placeholder="Contraseña" style="min-width:300px;" name="password">
                  </div>
</div>

                </div>
<button  type="submit" name="entrar">Entrar  </button>
                <div class="btnEntrar ">
    <h4>Entrar</h4>

                </div>

                <div type="submit"  class="btnFb fa fa-facebook-square btn btn-primary">
                  <h4> Facebook </h4>
                </div>



</div>


<a class="enlaces" href="#"> Olvidó su contraseña? </a>
<a class="enlaces" href="/proyecto/registro/index.php"> Crear una cuenta </a>

</form>

</body>
</html>
