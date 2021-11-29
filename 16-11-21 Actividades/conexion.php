<?php
    $host= 'localhost';
    $usuario= 'root';
    $clave= '';
    $bd= 'puestos';

    $conexion = mysqli_connect($host, $usuario, $clave, $bd) or die ("Error, fallo al conectarse");
?>