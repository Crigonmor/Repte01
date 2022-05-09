<?php
  require '../Functions.php';
  $obj = new Admin_Actions();

  $name_img = uniqid();
  //uniqid no repateixi la id

//Agafem de actions el arxiu la classe admin_actions

//Obtenir el perfil del administrador  actiu
$profile = $obj->getProfile($_SESSION['admin']);

  $save = $obj->savePost($_POST['txtNamePost'], $_POST['txtCategoryPost'], $_POST['description'],$name_img, $profile[0]['admin_id']);
  //a post posem el parametra que volem guardar

  if($save > 0){
    move_uploaded_file($_FILES['image_file']["tmp_name"], "../../img/img_posts/" . $name_img . ".png");
    echo "true";
  }else {
    echo "false";
  }
  //moure la imatge del post a la carpeta img_posts
 ?>
