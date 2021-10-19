<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio Prog. 2</title>
</head>
<body>
  <?php
    $a = 1;
    $b = 1;

    if($a === $b){
      echo("Los números son iguales A: $a, B: $b.");
    }
    else if($a > $b){
      echo("el numero mayor es $a");
    }
    else if($b > $a){
      echo("el numero mayor es $b");
    }
  ?>
</body>
</html>