<?php
  session_start();

  $usuario = $_SESSION['username'];
  
  echo ("<br><h1>Bienvenido ".$usuario."!!!</h1>");
  echo "<a href='salir.php'>SALIR</a>";
?>