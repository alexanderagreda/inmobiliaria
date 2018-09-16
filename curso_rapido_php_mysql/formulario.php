<?php include 'conexion.php' ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Formulario de ingreso de datos</title>
  </head>
  <body>
    <form action="guardar.php" method="post">
      <h3>Registrar estudiante</h3>
      <label for="nombre">Nombre</label>
      <input type="text" name="nombre" title="Ingresar nombre"><br />
      <label for="apellido1">Primer apellido</label>
      <input type="text" name="apellido1" title="Ingresar primer apellido"><br />
      <label for="apellido2">Segundo apellido</label>
      <input type="text" name="apellido2" title="Ingresar segundo apellido"><br />
      <input type="submit" value="Guardar">
    </form>
    <!-- Mostrar o consultar registros -->
    <table>
      <th>ID</th>
      <th>Nombre</th>
      <th>Primer apellido</th>
      <th>Segundo apellido</th>
      <th></th>
      <th></th>
      <?php
        $sel = $con->query("SELECT id, nombre, apellido1, apellido2 FROM curso.alumnos ");
        while ($fila = $sel->fetch_assoc()) {
      ?>
      <tr>
        <td><?php echo $fila['id']; ?></td>
        <td><?php echo $fila['nombre']; ?></td>
        <td><?php echo $fila['apellido1']; ?></td>
        <td><?php echo $fila['apellido2']; ?></td>
        <td><a href="actualizar.php?id=<?php echo $fila['id'] ?>">Editar</a></td><!-- Se envia el dato id del estudiante mediante la url -->
        <td><a href="eliminar.php?id=<?php echo $fila['id'] ?>">Eliminar</a></td><!-- Se envia el dato id del estudiante mediante la url -->
      </tr>
      <?php
        }
      ?>


    </table>
  </body>
</html>
