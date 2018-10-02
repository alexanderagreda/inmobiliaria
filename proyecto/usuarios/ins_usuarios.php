<?php

  include '../conexion/conexion.php';

  //Validar que los datos se estan enviando por el metodo post
  if ($_SERVER['REQUEST_METHOD']=='POST') {
    $usuario = $con->real_scape_string(htmlentities($_POST['usuario']));
    $pass1 = $con->real_scape_string(htmlentities($_POST['pass1']));
    $pass1 = sha1($pass1);  //cifrar contraseña
    $nivel = $con->real_scape_string(htmlentities($_POST['nivel']));
    $nombre->real_scape_string(htmlentities($_POST['nombre']));
    $correo->real_scape_string(htmlentities($_POST['correo']));

    //Validaciones de los datos provenientes del formulario

    //verificar datos nulos
    if (empty($usuario) || empty($pass1) || empty($nivel) || empty($nombre)) {
      header('location:../extend/alerta.php?msj=Hay un campo sin diligenciar&c=us&p=in&t=error');
      exit; //detener la ejecucion del codigo
    }

    //Verificar que el nombre de usuario solo contenga letras
    // la funcion ctype_alpha verifica si todos los caracteres de la variable enviada como parametro son alfabeticos
    if (!ctype_alpha($usuario)) {
      header('location:../extend/alerta.php?msj=El nombre de usuario solo puede tener letras&c=us&p=in&t=error');
      exit; //detener la ejecucion del codigo
    }

    //Verificar que el nivel de usuario solo contenga letras
    if (!ctype_alpha($nivel)) {
      header('location:../extend/alerta.php?msj=El nivel de usuario solo puede tener letras&c=us&p=in&t=error');
      exit; //detener la ejecucion del codigo
    }

    //Validar nombre completo de usuario usuario solo letras y espacio
    $caracteres = "ABCDEFGHIJKLMNOPQRSTUVWXYZ ";
    for ($i=0; $i < srtlen($nombre); $i++) {
      $buscar = substr($nombre,$i,1);
      // Encuentra la posición de la primera ocurrencia de un substring en un string
      if (srtpos($caracteres,$buscar)==false) {
        header('location:../extend/alerta.php?msj=El nombre completo de usuario solo puede tener letras&c=us&p=in&t=error');
        exit; //detener la ejecucion del codigo
      }
    }



  }else {
    //redireccionamiento
    header('location:../extend/alerta.php?msj=Utiliza el formulario&c=us&p=in&t=error');
  }
?>
