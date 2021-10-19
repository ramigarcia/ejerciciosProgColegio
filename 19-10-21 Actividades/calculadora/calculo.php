
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="box">
    <?php
        $valor1 = $_GET['valor1'];
        $valor2 = $_GET['valor2'];
        $operador = $_GET['operador'];

        if($operador == "+"){
            $resultado = $valor1 + $valor2;
            echo($valor1." + ".$valor2." nos da ".$resultado);
        }else if($operador == '-'){
            $resultado = $valor1 - $valor2;
            echo($valor1." - ".$valor2." nos da ".$resultado);
        }else if ($operador == "*") {
            $resultado = $valor1 * $valor2;
            echo($valor1." * ".$valor2." nos da ".$resultado);
        }else{
            if($valor2 == 0){
                echo "no se puede dividir por 0";
            }else{
                $resultado = $valor1 / $valor2;
                echo($valor1." / ".$valor2." nos da ".$resultado);
            }
        }
    ?>
    </div>
    
</body>
</html>