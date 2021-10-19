<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Variables</title>
</head>
<body>
  <?php
    $num1 = 25;
    $num2 = 5;

    // SUMA
    $suma = $num1 + $num2;
    echo "Este es el resultado, haciendo una <b>suma</b> entre $num1 y $num2. <br> <b>Resultado:</b> $suma <br>";

    // Resta
    $resto = $num1 - $num2;
    echo "Esta es la <b>diferencia</b> entre $num1 y $num2. <br> <b>Resultado:</b> $resto <br>";

    // Multiplicación
    $mult = $num1 * $num2;
    echo "Este es el resultado, haciendo una <b>multiplicación</b>  entre $num1 y $num2. <br> <b>Resultado:</b> $mult <br>";

    // División
    $div = $num1 / $num2;
    echo "Este es el resultado, haciendo una <b>división</b>  entre $num1 y $num2. <br> <b>Resultado:</b> $div";

  ?>
</body>
</html>