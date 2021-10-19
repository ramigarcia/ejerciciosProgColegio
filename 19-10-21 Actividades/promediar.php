<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promedio</title>
</head>
<body>
    <?php
        $sucursal1 = $_REQUEST['sucursal-1'];
        $sucursal2 = $_REQUEST['sucursal-2'];
        $sucursal3 = $_REQUEST['sucursal-3'];

        $promedio = ($sucursal1 + $sucursal2 + $sucursal3)/3;

        if($sucursal1 > $sucursal2){
            // SUCURSAL1 ES MAYOR QUE SUCURSAL 2
            if($sucursal1 > $sucursal3){
                echo "Sucursal 1 obtuvo mas ventas: ".$sucursal1;
            }else {
                echo "Sucursal 3 obtuvo mas ventas: ".$sucursal3;
            }
        }elseif ($sucursal2 > $sucursal3) {
            echo "Sucursal 2 obtuvo mas ventas: ".$sucursal2;
        }elseif ($sucursal3 > $sucursal2){
            echo "Sucursal 3 obtuvo mas ventas: ".$sucursal3;
        }else{
            echo "todas son iguales ".$sucursal1." - ".$sucursal2." - ".$sucursal3;
        }
        echo "<br>";
        if($sucursal1 < $sucursal2 && $sucursal1 < $sucursal3){
                echo "La sucursal 1 obtuvo las ventas minimas ". $sucursal1;
        }elseif ($sucursal2 < $sucursal1 && $sucursal2 < $sucursal3) {
                echo "La sucursal 2 obtuvo las ventas minimas ". $sucursal2;
        }elseif ($sucursal3 < $sucursal1 && $sucursal3 < $sucursal2) {
                echo "La sucursal 3 obtuvo las ventas minimas ".$sucursal3;
        }
        echo "<br>";
        echo "promedio: ".$promedio; 
    ?>
</body>
</html>