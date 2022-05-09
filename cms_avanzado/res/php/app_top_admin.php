<?php
  require 'Functions.php';
  $admin = new Admin_Actions();

  if(
    isset($_SESSION['admin']) &&
    isset($_GET['section']) &&
    $_GET['section'] == "posts"
//mira si tenim una sessio activa tambe si i a una seccio selecionada
  ){
    //Obtenir Categories de la bd
    $categories = $admin->getCategories();
  }

  if(
    isset($_SESSION['admin']) &&
    isset($_GET['section']) &&
    $_GET['section'] == "categories"
//mira si tenim una sessio activa tambe si i a una seccio selecionada
  ){
    //Obtenir Categories de la bd
    $categories = $admin->getCategories();
  }
 ?>
