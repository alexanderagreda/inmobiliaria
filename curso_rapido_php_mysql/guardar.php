<?php

  include 'conexion.php';

  $nombre = $_POST['nombre'];
  $apellido1 = $_POST['apellido1'];
  $apellido2 = $_POST['apellido2'];

  $ins = $con->query("INSERT INTO alumnos (nombre,apellido1, apellido2) VALUES ('$nombre','$apellido1','$apellido2')");
  if($ins){
    echo "Se guardaron los datos correctamente";
  }else{
    echo "Falló la conexión: " . $con->error;
    exit();
  }

?>
