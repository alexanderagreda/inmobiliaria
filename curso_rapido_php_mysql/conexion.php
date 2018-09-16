<?php
  require_once 'lib.php';
  $con = new mysqli(SERVER,USER,PASS,DATABASE);
  if($con->connect_errno){
    echo "Error: Fallo al conectarse a MySQL debido a: " . "<br/>";
    echo "Errno: " . $mysqli->connect_errno . "<br />";
    echo "Error: " . $mysqli->connect_error . "<br />";
    exit();
  }

?>
