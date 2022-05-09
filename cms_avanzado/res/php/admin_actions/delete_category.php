<?php
  require '../Functions.php';
  $obj = new Admin_Actions();
//Agafem de actions el arxiu la classe admin_actions

  $delete = $obj->deleteCategory($_POST['category_id']);
  //a post posem el parametra que volem guardar
  echo $delete;
 ?>
