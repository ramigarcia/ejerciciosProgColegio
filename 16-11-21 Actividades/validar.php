<?php
    require './conexion.php';
    session_start();

    $usuario = $_POST['usuario'];
    $clave = $_POST['contraseña'];

    $consulta = "SELECT COUNT(*) as contar FROM users where usuario='$usuario' and clave='$clave'";

    $consulta = mysqli_query($conexion, $consulta);
    $array = mysqli_fetch_array($consulta);

    if ($array["contar"]>0) {
        $_SESSION["username"] = $usuario;
        header("location:hola.php");
    } else {
        echo "Datos incorrectos";
    }
    
?>