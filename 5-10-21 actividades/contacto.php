<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Creación de un portal con PHP y MySQL</title>
</head>
<body bgcolor="#303030">
  <body text="#e5e5e5">
  <font face = "tahoma">
  <font size = "2">
  <body link="e5e5e5" vlink="e0e0e0">
  <p align="center">
  
  <strong>
    Su mensaje ha sido enviado. En breve contactaremos con usted. Gracias.
  </strong>

  <?php
    $fecha=date("d-m-Y");
    $hora=date("G:i");
    $destinatario="rg2607836@gmail.com";

    $asunto="Contacto de cliente (prueba desde el colegio)";

    echo "<br> <br> <br>";
    echo "Compruebe si sus datos don corrects, de lo contrario pinche en <a href=http://localhost/formulario.php>Volver</a>";

    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $direccion = $_POST['direccion'];
    $localidad = $_POST['localidad'];
    $provincia = $_POST['provincia'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];

    $texto = "Nombre:"."\n".$nombre.
    "<br>"."Apellidos:"."\n".$apellidos.
    "<br>"."Dirección:"."\n".$direccion.
    "<br>"."Localidad:"."\n".$localidad.
    "<br>"."Provincia:"."\n".$provincia.
    "<br>"."Telefono:"."\n".$telefono.
    "<br>"."Email:"."\n".$email.
    "<br>"."Fecha:"."\n".$fecha.
    "<br>"."Hora:"."\n".$hora;

    echo "<br><br><br>";
    echo $texto;
    echo "<br><br>";
    mail($destinatario, $asunto,$texto);
  ?>
</body>
</html>