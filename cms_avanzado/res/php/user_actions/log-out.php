<?php
  session_start();
//obra la sessio

  session_destroy();
  //tanca la sesio
  header("Location: http://localhost/Projects/00 PHP/cms_avanzado/");
 ?>
