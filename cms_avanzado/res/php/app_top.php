<?php
  require 'Functions.php';
  $user = new User_Actions();

  if(!isset($_GET['section'])){
    // Obtenir Publicacions recents

    $posts = $user->getRecentPosts();
    //post agafa les publicacions mes resents
    //mira que no i axi cap vista selecionada

  }elseif(
    isset($_GET['section']) &&
  $_GET['section'] == "post"
//isset ens permet veure si una variable esta definida o no
  ){
    // Obtenir informacio de publicacio
    $post = $user->getPostInfo($_GET['post_id']);

  }

 ?>
