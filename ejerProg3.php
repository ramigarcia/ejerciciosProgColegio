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
    $a = 12;
    $b = 1;

    $suma = $a + $b;

    if($suma > 12){
      $resta = $suma - 3;

      echo("El resultado de la suma es mayor a 12 ($suma), le restamos 3 y quedaría: $resta");
    }
    else if ($suma < 5){
      $sumar2 = $suma + 2;
      echo("El resultado de la suma es menor a 5 ($suma), le sumamos 2 y quedaría: $sumar2");
    }
    else{
      echo("El resultado no es mayor a 12 ni menor a 5 ($suma)");
    }
  ?>
</body>
</html>