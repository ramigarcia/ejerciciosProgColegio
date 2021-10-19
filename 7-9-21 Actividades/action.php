<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="action.css">
  <title>Action PHP</title>
</head>
<body>
  <?php
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $fecha = $_POST['fecha'];

    echo "<h1>Hola, estos son tus datos 😃</h1>";
    echo "<h2>Nombre: <span>$nombre</span>";
    echo "<h2>Edad: <span>$edad</span>";
    echo "<h2>Fecha de Nacimiento: <span>$fecha</span>";
  ?>
</body>
</html>