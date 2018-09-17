<?php

  include 'conexion.php';

  //Validar que los datos se estan enviando por el metodo post
  if ($_SERVER['REQUEST_METHOD']=='GET') {

  }else {
    echo "<script> alert('No es posible acceder directamente a este recurso'); location.href='index.php'</script>";
    exit();
  }

  $id = $_REQUEST['id'];

  $del = $con->query("DELETE FROM cursos.alumnos WHERE id='$id' ");

  if ($del) {
    echo "<script>
            alert('Se elimino el registro correctamente')
            location.href='index.php';
          </script>";
  }else {
    echo "<script>
            alert('El registro no pudo ser eliminado');
            location.href='index.php'
          </script>";
  }

?>
