<?php
  session_start();
  require 'medoo.php';
  use Medoo\Medoo;

try{
  //conectar a la base de dades
  $database = new Medoo([
  // [required]
  'type' => 'mysql',
  'host' => 'localhost',
  'database' => 'cms_avanzado',
  'username' => 'root',
  'password' => '',

  ]);
//en el cas que no pugui conectar a la base de dades fara un echo de que no sa pugut conectar
}catch(PDOException $e){
  echo "No se pudo connectar a la base de datos.";
}

?>
