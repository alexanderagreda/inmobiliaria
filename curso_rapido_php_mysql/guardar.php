<?php

  include 'conexion.php';

  //Validar que los datos se estan enviando por el metodo post
  if ($_SERVER['REQUEST_METHOD']=='POST') {

  }else {
    echo "<script> alert('No es posible acceder directamente a este recurso'); location.href='index.php'</script>";
    exit();
  }

  $nombre = trim($_POST['nombre']);
  $apellido1 = trim($_POST['apellido1']);
  $apellido2 = trim($_POST['apellido2']);

  if ($nombre == "" or $apellido1 == "") {
    echo "<script>
            alert('No fue posible insertar los datos, los campos nombre y primer apellido no pueden estar vacios o contener espacios en blanco');
            location.href='index.php';
          </script>";
    exit();
  }

  $ins = $con->query("INSERT INTO cursos.alumnos (nombre, apellido1, apellido2) VALUES ('$nombre','$apellido1','$apellido2') ");

  if ($ins) {
    echo "<script>
            alert('Datos guardados');
            location.href='index.php';
          </script>";

    $con->close();
  }else {
    echo "Error: Fallo debido a: <br />";
    echo "Errno: " . $con->error . "<br />";
    $con->close();
    exit();
  }

?>
