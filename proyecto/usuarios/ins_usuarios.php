<?php

  include '../conexion/conexion.php';

  //Validar que los datos se estan enviando por el metodo post
  if ($_SERVER['REQUEST_METHOD']=='POST') {
    $usuario = $con->real_escape_string(htmlentities($_POST['usuario']));
    $pass1 = $con->real_escape_string(htmlentities($_POST['pass1']));
    $nivel = $con->real_escape_string(htmlentities($_POST['nivel']));
    $nombre = $con->real_escape_string(htmlentities($_POST['nombre']));
    $correo = $con->real_escape_string(htmlentities($_POST['correo']));

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

    //Validar nombre completo de usuario solo letras y espacios
    $caracteres = "ABCDEFGHIJKLMNOPQRSTUVWXYZ ";
    for ($i=0; $i < strlen($nombre); $i++) {
      $buscar = substr($nombre,$i,1);
      // Encuentra la posición de la primera ocurrencia de un substring en un string
      if (strpos($caracteres,$buscar)===false) {
        header('location:../extend/alerta.php?msj=El nombre completo de usuario solo puede tener letras&c=us&p=in&t=error');
        exit; //detener la ejecucion del codigo
      }
    }

    $nomusuario = strlen($usuario);
    $contrasena = strlen($pass1);

    if ($nomusuario < 8 || $nomusuario > 15) {
      header('location:../extend/alerta.php?msj=El nombre de usuario debe contener entre 8 y 15 caracteres&c=us&p=in&t=error');
      exit; //detener la ejecucion del codigo
    }

    if ($contrasena < 8 || $contrasena >15) {
      header('location:../extend/alerta.php?msj=La contraseña debe contener entre 8 y 15 caracteres&c=us&p=in&t=error');
      exit; //detener la ejecucion del codigo
    }

    //Si el correo no esta vacio realizar la validacion del contenido
    if (!empty($correo)) {
      // filter_var — Filtra una variable con el filtro que se indique, si no se cumple retorna false
      if (!filter_var($correo,FILTER_VALIDATE_EMAIL)) {
        header('location:../extend/alerta.php?msj=El formato de la direccion de email no es correcta&c=us&p=in&t=error');
        exit; //detener la ejecucion del codigo
      }
    }

    //Gestion de imagenes
    $extension = '';
    $ruta = 'foto_perfil';
    $archivo = $_FILES['foto']['tmp_name'];
    $nombrearchivo = $_FILES['foto']['name'];
    $info = pathinfo($nombrearchivo);
    if ($archivo != '') {
      $extension = $info['extension'];
      if ($extension == "png" || $extension == "PNG" || $extension =='jpg' || $extension =='JPG') {
        move_uploaded_file($archivo,'foto_perfil/'.$usuario.'.'.$extension);
        $ruta = $ruta."/".$usuario.'.'.$extension;
      }else{
        header('location:../extend/alerta.php?msj=El formato de la imagen no es permitido&c=us&p=in&t=error');
        exit; //detener la ejecucion del codigo
      }
    }else {
      $ruta = "foto_perfil/user.png";
    }

    //codificar la contraseña
    $pass1=sha1($pass1);

    //Guardar los datos en la base de datos, el primer campo es autonumerico por tal motivo se envia NULL en lugar de vacio ''
    $ins = $con->query("INSERT INTO inmobiliaria.usuario VALUES(NULL,'$usuario','$pass1','$nombre','$correo','$nivel',1,'$ruta') ");
    if ($ins) {
      header('location:../extend/alerta.php?msj=El usuario fue registrado&c=us&p=in&t=success');
    }else {
      header('location:../extend/alerta.php?msj=El usuario no fue registrado&c=us&p=in&t=error');
      exit; //detener la ejecucion del codigo
    }


  }else {
    //redireccionamiento
    header('location:../extend/alerta.php?msj=Utiliza el formulario&c=us&p=in&t=error');
  }

?>
