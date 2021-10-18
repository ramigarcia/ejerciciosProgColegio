<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio PHP</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php
    $nombre = "Ramiro";
    $altura = 161;

    echo "<h1>$nombre</h1> <br>";
    echo "<h1>$altura</h1> <br>";
    echo "<hr>";

    #GET
      // $_GET["nombre"];
      $nombre =  $_GET["nombre"];
      echo $_GET["nombre"];
      $altura = $_GET["altura"];
      echo $_GET["altura"];

      if($altura >= 160){
        echo "<h3>Sos una persona media alta</h3>";
      }else{
        echo "<h3>No sos tan alto</h3>";
      }
  ?>
</body>
</html>