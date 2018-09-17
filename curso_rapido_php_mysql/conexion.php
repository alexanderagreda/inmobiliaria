<?php

  $con = new mysqli('localhost','root','mysql','cursos');

  if ($con->connect_errno) {
    echo "Error: Fallo al conectarse a MySQL debido a: <br />";
    echo "Errno: " . $con->connect_errno . "<br />";
    echo "Error: " . $con->connect_error . "<br />";
    exit();
  }

?>
