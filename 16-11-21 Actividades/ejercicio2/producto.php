<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de productos</title>
</head>
<body>
  <?php
    $usuario= $_POST['usuario'];
		echo "<h1>Bienvenido: $usuario </h1>";
  ?>

	<h1>Productos de la Tierra</h1>
	<hr color="green">
	<table>
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Descripción</th>
				<th>Cantidad</th>
				<th>Precio</th>
			</tr>
		</thead>
		<tbody>
			<?php
				require_once('conexion.php');
				$consulta= mysqli_query($conexion, "SELECT * FROM productos");

				while($fila=mysqli_fetch_array($consulta)){
					$precio=number_format($fila["precio"]);
						printf('<tr>
							<td>%s</td>
							<td>%s</td>
							<td>%s </td>
							<td>$ '.$precio.'</td>
							</tr>', $fila["nombre_producto"],
							$fila["descripcion"],$fila["cantidad"],
							$fila["precio"]); }
			?>
		</tbody>
	</table>
</body>
</html>