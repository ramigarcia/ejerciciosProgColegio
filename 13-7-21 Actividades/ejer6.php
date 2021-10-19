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
      $equipo1 = 5;
      $equipo2 = 2;

      if($equipo1 > $equipo2){
        echo("Equipo 1 ganó con un total de $equipo1");
      } else if ($equipo1 < $equipo2){
        echo("Equipo 2 ganó con un total de $equipo2");
      }else{
        echo("termino en empate");
      }
  	?>
  </div>
</body>
</html>