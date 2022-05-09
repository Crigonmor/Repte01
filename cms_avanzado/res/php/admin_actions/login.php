<?php
  require '../Functions.php';
  $admin = new Admin_Actions();

  //logIn
  $login = $admin->logIn($_POST['email'], $_POST['pass']);

  echo  $login;
  if($login){
    //Iniciar sessio
    $_SESSION['admin'] = $_POST['email'];
    echo "true";
  }else{
    echo "false";
  }

  //agafa les variables que antrem al document de admin
 ?>
