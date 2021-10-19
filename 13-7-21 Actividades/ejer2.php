<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>
  <div class="box">
  <?php
    $letr1 = "S";
    $letr2 = "N";

    if ($letr1 === "S" AND $letr2 === "N"){
        echo("La letra 1 es: '$letr1' y La letra 2 es: '$letr2'");
    }else{
        echo("hay una letra que no es 'S' o 'N'");
    }
  ?>
  </div>
</body>
</html>