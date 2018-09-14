<?php
    include '../conexion/conexion.php';
    $usuario = $con->real_escape_string($_POST['usuario']); //escapar caracteres especiales
    $sel = $con->query("SELECT id FROM inmobiliaria.usuario WHERE usuario = '$usuario' "); //ejecutar consulta
    $row = mysqli_num_rows($sel); //contar la cantidade filas resultado de la consulta
    if ($row != 0 ) {
        echo "<label style='color:red;'>El nombre de usuario ya existe</label>";
    } else {
        echo "<label style='color:green;'>El nombre de usuario esta disponible</label>";
    }
    $con->close(); //cerrar la conexion
?>
