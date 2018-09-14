<?php

  include '../conexion/conexion.php';

  //Validar que los datos se estan enviando por el metodo post
  if ($_SERVER['REQUEST_METHOD']=='POST') {
    // code...
  }else {
    echo "<script> alert('No es posible acceder directamente a este recurso'); location.href='index.php'</script>";
  }

?>
