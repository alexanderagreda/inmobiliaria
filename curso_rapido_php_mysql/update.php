<?php

  include 'conexion.php';

  if ($_SERVER['REQUEST_METHOD']=='POST') {

    $id = trim($_POST['id']);
    $nombre = trim($_POST['nombre']);
    $apellido1 = trim($_POST['apellido1']);
    $apellido2 = trim($_POST['apellido2']);

    if ($nombre == ""  or $apellido1 == "") {
      echo "<script>
              alert('No es posible actualizar los datos, el nombre o primer apellido no pueden estar vacios');
              location.href='actualizar.php?id=".$id."';</script>";
            exit();
    }else{
      $up = $con->query("UPDATE cursos.alumnos SET id='$id', nombre='$nombre', apellido1='$apellido1', apellido2='$apellido2' WHERE id='$id' ");
      if ($up) {
        echo "<script>
                location.href='index.php';
              </script>";
      }else{
        echo "<script>location.href='actualizar.php?id=".$id."';</script>";
      }
    }
  }else {
    echo "<scritp>
            alert('No es posible acceder directamente a este recurso');
            location.href='index.php';
          </script >";
    exit();
  }

?>
