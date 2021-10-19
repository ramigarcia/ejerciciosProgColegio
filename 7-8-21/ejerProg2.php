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
    $a = 8;
    $b = 9;

    if($a == 0 || $b == 0){
      echo("Atención, hay un número que es igual a 0, no podemos hacer la división");
    }
    else if($a > $b){
      $div = $a / $b;
      echo("El número a es Mayor, se realiza la división: $div");
    }else if($b >= $a){
      $suma = $a + $b;
      echo("El número b es Mayor, se realiza la suma: $suma");
    }
  ?>
</body>
</html>