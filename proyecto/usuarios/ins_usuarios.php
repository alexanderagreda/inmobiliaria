<?php

  include '../conexion/conexion.php';

  //Validar que los datos se estan enviando por el metodo post
  if ($_SERVER['REQUEST_METHOD']=='POST') {
    $usuario = $con->real_scape_string(htmlentities($_POST['usuario']));
    $pass1 = $con->real_scape_string(htmlentities($_POST['pass1']));
    //cifrar contraseña
    $pass1 = sha1($pass1);
    $nivel = $con->real_scape_string(htmlentities($_POST['nivel']));
    $nombre->real_scape_string(htmlentities($_POST['nombre']));
    $correo->real_scape_string(htmlentities($_POST['correo']));
  }else {
    //redireccionamiento
    header('location:../extend/alerta.php?msj=Utiliza el formulario&c=us&p=in&t=error');
  }

?>
