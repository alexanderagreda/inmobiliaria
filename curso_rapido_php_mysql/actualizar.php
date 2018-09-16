<?php include 'conexion.php';
  //se utiliza request para obtener el dato de la variable envida con el metodo GET desde el formulario
  $id = $_REQUEST['id'];

  $sel = $con->query("SELECT * FROM curso.alumnos WHERE id='$id' ");
  if ($fila = $sel->fetch_assoc()) {

  }
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Editar datos del estudiante</title>
  </head>
  <body>
    <form action="update.php" method="post">
      <h3>Editar datos del estudiante</h3>
      <input type="hidden" name="id" value="<?php echo $id; ?>"> <!-- campo oculto para enviar el id -->
      <label for="nombre">Nombre</label>
      <input type="text" name="nombre" title="Ingresar nombre" value="<?php echo $fila['nombre']; ?>"><br />
      <label for="apellido1">Primer apellido</label>
      <input type="text" name="apellido1" title="Ingresar primer apellido" value="<?php echo $fila['apellido1']; ?>"><br />
      <label for="apellido2">Segundo apellido</label>
      <input type="text" name="apellido2" title="Ingresar segundo apellido" value="<?php echo $fila['apellido2']; ?>"><br />
      <input type="submit" value="Actualizar">
    </form>
  </body>
</html>
