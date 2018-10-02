<?php include '../conexion/conexion.php' ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.26.28/sweetalert2.css">
    <title>Proyecto</title>
  </head>
  <body>

    <?php
      //obtener las variables recibidas por la URL desde extend/ins_usuarios.php
      $mensaje = htmlentities($_GET['msj']); //mensaje
      $c = htmlentities($_GET['c']); // carpeta
      $p = htmlentities($_GET['p']); // pagina
      $t = htmlentities($_GET['t']); // tipo

      switch ($c) {
        case 'us':
          $carpeta = '../usuarios/';
          break;
      }

      switch ($p) {
        case 'in':
          $pagina = 'index.php';
          break;
      }

      $dir = $carpeta.$pagina;

      //Validar si el contenido de la variable es error
      if ($t=="error") {
        $tiulo = "Oops.."; //Error
      }else{
        $tiulo = "Buen trabajo!"; //No muestra error
      }
    ?>
    <!--1. Import jQuery-->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <!--3. Import sweetalert2.js-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.26.28/sweetalert2.js"></script>
    <script>
    swal({
      title: '<?php echo $tiulo ?>',
      text: "<?php echo $mensaje ?>",
      type: '<?php echo $t ?>',
      confirmButtonColor: '#3085d6',
      confirmButtonText: 'OK'
    }).then((result) => {
      location.href='<?php echo $dir ?>';
    });

    //En caso de que se presiona click fuera de la alerta
    $(document).click(function functionName() {
      location.href='<?php echo $dir ?>';
    });

    // En caso de que se presiona la tecla escape
    $(document).keyup(function(e) {
      if (e.which == 27) {
        location.href='<?php echo $dir ?>';
      }
    });

    </script>
  </body>
</html>
