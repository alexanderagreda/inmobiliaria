<?php include 'conexion.php'; ?>
<!DOCTYPE html>
  <html lang="es">
    <head>
      <meta charset="UTF-8">
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!-- Import compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
      <!-- Import customize CSS -->
      <link rel="stylesheet" href="css/app.css">
      <!-- Import sweet alert -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.26.28/sweetalert2.min.css">
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.26.28/sweetalert2.min.js"></script>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>Formulario de registro</title>
    </head>
    <body class="blue darken-4">
      <div class="row">
        <h4 class="center-align white-text">Formulario de Registro</h4>
        <div class="col s4 card offset-s4 hoverable">
          <div class="row">
            <div class="col s10 offset-s1">
              <form action="guardar.php" method="post" id="formulario">
                  <div class="input-field">
                      <input type="text" name="nombre" title="Escriba su nombre" autofocus required>
                      <label for="nombre">Nombre</label>
                  </div>
                  <div class="input-field">
                    <input type="text" name="apellido1" title="Escriba su apellido" required>
                    <label for="apellido1">Primer apellido</label>
                  </div>
                  <div class="input-field">
                    <input type="text" name="apellido2" title="Escriba su segundo apellido">
                    <label for="apellido2">Segundo apellido</label>
                  </div>
                  <button class="btn waves-effect waves-light blue darken-4" type="submit">Guardar
                    <i class="material-icons right">save</i>
                  </button>
              </form>
            </div>
          </div>
        </div>
      </div><!-- fin row form -->

      <div class="row">
        <div class="col s10 card offset-s1 hoverable">
          <table class="centered">
            <thead>
              <th>ID</th>
              <th>Nombre</th>
              <th>Primer apellido</th>
              <th>Segundo apellido</th>
            </thead>
            <?php
              $sel = $con->query("SELECT id, nombre, apellido1, apellido2 FROM cursos.alumnos ");
              while ($fila = $sel->fetch_assoc()){
            ?>
            <tr>
              <td><?php echo $fila['id']; ?></td>
              <td><?php echo $fila['nombre']; ?></td>
              <td><?php echo $fila['apellido1']; ?></td>
              <td><?php echo $fila['apellido2']; ?></td>
              <td>
                <a href="actualizar.php?id=<?php echo $fila['id'] ?>" title="Editar"> <i class="material-icons">edit</i></a>
                <a href="eliminar.php?id=<?php echo $fila['id'] ?>" title="Eliminar"> <i class="material-icons">delete</i></a>
              </td>
            </tr>
          <?php } ?>
          </table>
        </div>
      </div><!-- end tabla -->


      <!-- JQuery -->
      <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
      <!-- Compiled and minified JavaScript -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    </body>
</html>
