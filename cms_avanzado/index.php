<?php require 'res/php/app_top.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CMS Avanzado</title>
    <link rel="stylesheet" href="http://localhost/Projects/00 PHP/cms_avanzado/res/css/framework/semantic/semantic.min.css">
    <link rel="stylesheet" href="http://localhost/Projects/00 PHP/cms_avanzado/res/css/main.css">
  </head>
  <body>
    <?php require "views/nav/main_nav.php"; ?>

    <?php
    if (!isset($_GET['section'])) {
      require 'views/home.php';
//si no tenim cap secsio selecionada
}elseif(isset($_GET['section']) &&
$_GET['section'] == "post"

){
  require 'views/post.php';
}
     ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script  src="res/css/framework/semantic/semantic.min.js"></script>
  </body>
</html>
