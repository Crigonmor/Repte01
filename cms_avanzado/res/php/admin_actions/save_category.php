<?php
  require '../Functions.php';
  $obj = new Admin_Actions();
//Agafem de actions el arxiu la classe admin_actions

  $save = $obj ->save_Category($_POST['category']);
  //a post posem el parametra que volem guardar
  echo $save;
 ?>
