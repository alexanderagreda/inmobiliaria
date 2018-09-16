<?php

  include 'conexion.php';

  $id = $_POST['id'];
  $nombre = $_POST['nombre'];
  $apellido1 = $_POST['apellido1'];
  $apellido2 = $_POST['apellido2'];

  $up = $con->query("UPDATE curso.alumnos SET nombre='$nombre', apellido1='$apellido1',apellido2='$apellido2' WHERE id='$id' ");
  if ($up) {
    echo "<script>location.href='formulario.php';</script>";
  }else{
    echo "<script>location.href='actualizar.php?id=".$id."';</script>";
  }
?>
