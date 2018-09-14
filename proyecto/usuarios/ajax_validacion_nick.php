<?php
    include '../conexion/conexion.php';
    $usuario = $con->real_escape_string($_POST['usuario']);
    $sel = $con->query("SELECT id FROM inmobiliaria.usuario WHERE nick = '$usuario' ");
    $row = mysqli_num_rows($sel);
    if ($row != 0 ) {
        echo "<label style='color:red;'>El nombre de usuario ya existe</label>";
    } else {
        echo "<label style='color:green;'>El nombre de usuario esta disponible</label>";
    }
?>
