<?php
    include '../conexion/conexion.php';
    $usuario = $con->real_escape_string($_POST['usuario']); //escapar caracteres especiales
    $sel = $con->query("SELECT id FROM inmobiliaria.usuario WHERE usuario = '$usuario' "); //ejecutar consulta
    if($sel){
      if ($row != 0 ) {
        echo "<label style='color:red;'>El nombre de usuario ya existe</label>";
      }else{
        echo "<label style='color:green;'>El nombre de usuario esta disponible</label>";
      }
    }else{
      echo "<label style='color:red;'>" . "Error query: " . mysqli_error($con) ."</label>";
    }
    $con->close(); //cerrar la conexion
?>
