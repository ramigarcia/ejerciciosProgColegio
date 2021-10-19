<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio Prog. 1</title>
</head>
<body>
  <?php
    $a = 5;
    $b = 4;

    $resta = $a - $b;

    if($resta < 0){
        echo("Error el número es negativo");
    }else if ($resta >= 0){
        echo("El número es positivo");
    }
  ?>
</body>
</html>