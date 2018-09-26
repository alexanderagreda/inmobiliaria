<?php

  $con = new mysqli('localhost','root','mysql','inmobiliaria');
  //Validar errores de conexion
  if ($con->connect_errno) {
    echo "Error: Fallo al conectarse a la base de datos debido a: <br />";
    echo "Errno: " . $con->connect_errno . "<br />";
    echo "Error: " . $con->connect_error . "<br />";
    exit;
  }

?>
