<?php
  $servidor = "localhost";
	$usuario = "root";
	$password = "";
	$base = "negocio";

	$conexion = mysqli_connect("$servidor", "$usuario", "$password")or die("warning");

	$base = mysqli_select_db($conexion, $base);
?>