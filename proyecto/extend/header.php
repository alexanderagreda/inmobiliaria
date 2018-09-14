<?php include '../conexion/conexion.php'; ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content-type="ie-edge">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="../css/materialize.min.css">
    <!--Import sweetalert2.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.26.28/sweetalert2.css">
    <style media="screen">
      header, main, footer {
        padding-left: 300px;
      }

      @media only screen and (max-width : 992px) {
          header, main, footer {
            padding-left: 0;
          }
      }
    </style>
    <title></title>
  </head>
  <body>
    <main>
      <?php include 'menu_admin.php' ?>
