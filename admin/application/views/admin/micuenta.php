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

<h3> hola </h3>
 <p>
asdasdasdas
 </p>
