<?php require '../res/php/app_top_admin.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Administrador</title>
    <link rel="stylesheet" href="../res/css/framework/semantic/semantic.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../res/css/main.css">
  </head>
  <body>
    <?php
    if (
       isset($_SESSION['admin'])
     ) {
//si no tenim cap secsio selecionada i no tenim cap sesio activa
      require "../views/nav/main_admin_nav.php";
    }
      ?>

    <?php
    if (
       !isset($_SESSION['admin'])
     ){
      require '../views/admin/home.php';
      }elseif(
        isset($_SESSION['admin']) &&
        !isset($_GET['section'])

      ){
        require '../views/admin/main.php';
      }elseif(
        isset($_SESSION['admin']) &&
        isset($_GET['section']) &&
        $_GET['section'] == "posts"
      ){
        require '../views/admin/posts.php';

      }elseif(
        isset($_SESSION['admin']) &&
        isset($_GET['section']) &&
        $_GET['section'] == "categories"
      ){
        require '../views/admin/categories.php';

      }

//si no tenim cap secsio selecionada i no tenim cap sesio activa

     ?>
    <script src="//cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script  src="../res/css/framework/semantic/semantic.min.js"></script>
    <script  src="../res/js/admin.js"></script>
  </body>
</html>
