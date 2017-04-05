<?php
$CI =& get_instance();
$message = '';
$data['title'] = "Login page";
if($_POST){
  $sql = 'select * from user where email = ? and pass = ?';
  $email = $_POST['email'];
  $pass = md5($_POST['pass']);

  $rs = $CI->db->query($sql, array($email,$pass));
  $rs = $rs->result();
  // Here i can check if the user exists
  if(count($rs) > 0){

    $_SESSION['comment_user'] = $rs[0];
    redirect('wall');

  }
  else{
    $message='clave o usuario incorrectos';
  }
}
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
body{background-color:black}
</style>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <div class="text-center">
      <a class="navbar-brand" href="#">ITLA BIKE !</a><
    </div>

  </div>
</nav>

<div class="container">

  <p>Registros !!</p>
</div>

</body>
</html>
<!-- This view is for login purposes  -->
<div class="jumbotron jb-reduced">
  <div class="row">
    <div class="col-sm-12">
        <legend><h2>ADMIN PAGE</h2></legend>
        <form class="form-horizontal" action="" method="post" name="login_form">
          <div class="form-group input-group">
            <label for="email" class="input-group-addon bg-white"> <i class="fa fa-envelope" aria-hidden="true"></i> Email</label>
            <input type="email" name="email" class="form-control" id="email" required/>
          </div>
            <div class="form-group input-group">
              <label for="pass" class="input-group-addon bg-white"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Contraseña</label>
              <input type="password" name="pass" class="form-control" id="pass"required/>
            </div>
            <div class="text-center">
              <button type="button" class="btn bg-" id="ingress_btn">Ingresar</button>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <a href="<?php echo base_url('register') ?>"><p>Para formar parte de nuestro equipo ,  Registrese aquí !!</p></a>
              </div>
            </div>
            <div class="row">

              <div class="col-sm-12">
                <div id="message" class="alert alert-danger" style="display:none;">
                  <?php echo $message ?>
                  <!-- This script will allow me to show the message -->
                  <script type="text/javascript">
                  $(document).ready(initMessage);
                  function initMessage(){
                    //This will retrieve my variable from php verifying that is not empty
                    var message = '<?php echo (isset($message)?$message:'') ?>';
                    if(message != ''){
                      $("#message").show(0,messageAppend).addClass('alert-dismissable fade in');
                    }
                    else{
                      $("#message").hide();
                    }

                  }
                    //function to append the desired message
                    function messageAppend(){
                      $(message).appendTo('#message').fadeIn(5000,closeMessage).addClass("animated bounce");
                    }
                    function closeMessage(){
                      var close = '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
                      $(close).appendTo('#message').fadeIn(5000);
                    }

                    function messagecloud(){

                       $('#message').show(0,messageAppend)
                    }
                  </script>
                </div>
              </div>
            </div>
        </form>
  </div>
  </div>
  <script src="<?php echo base_url('') ?>js/login_effects.js" charset="utf-8"></script>

</div>
