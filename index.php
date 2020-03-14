<!DOCTYPE html>
<html lang="es">

<head>

	<title>EJEMPLO</title>

	<style>

		.tableC {
			padding: 10px 550px;
			font-size: 20px;
		}

		/* #imagen {
			padding: 15px 515px;
		} */

		.center {
			padding-top: 30px;
			padding-left: 490px;
		}

	</style>

</head>

<body>
	<article>
	<center>
		<img id="imagen" src="https://concepto.de/wp-content/uploads/2018/04/base-de-datos-min-e1523470739502.jpg" width="300" height="250" alt="Imagen de Base de Datos">

	</center>

		<table class="tableC">

			<tr>
				<td>1.</td>
				<td><a href="CONSULTAR.php">CONSULTAR</a></td>
			</tr>

			<tr>
				<td>2.</td>
				<td><a href="ADICIONAR.php">ADICIONAAR</a></td>
			</tr>

			<tr>
				<td>3.</td>
				<td><a href="ELIMINAR.php">ELIMINAR</a></td>
			</tr>

		</table>

	</article>

	<article class="center">
		<strong>Datos de los Clientes</strong>
		<p></p>

		<?php

		$conexion = mysqli_connect('localhost:3306', 'root', 'root', 'prueba');
		$sql = "select cod_cli, nmb_cli from clientes";
		$consulta = $conexion->query($sql);

		while ($f = $consulta->fetch_assoc()) {
			print "Codigo: {$f["cod_cli"]} ,  Nombre: {$f["nmb_cli"]}";
			echo "<br>";
		}

		mysqli_close($conexion);
		echo "<br>";
		
		// $conexion = new mysqli('localhost', 'root', 'root', 'prueba');
	
		// $sql = "select cod_cli, nmb_cli from clientes";
		// $consulta = $conexion->query($sql);

		// while ($f = $consulta->fetch_assoc()) {
		// 	print "Codigo: {$f["cod_cli"]} ,  Nombre: {$f["nmb_cli"]}";
		// 	echo "<br>";
		// }

		// echo "<br>";

		?>

	</article>

</body>

</html>

<!-- 
<?php
/*
	$conexion = new mysqli('localhost', 'root', '', 'pruebas','3308');
	$cod = $_POST['codigo'];
	$sql = "select cod_cli, nmb_cli from clientes where cod_cli='$cod'";
	$consulta = $conexion-> query($sql);

	while ($f = $consulta->fetch_object()) {
		echo $f->cod_cli; 
		echo $f->nmb_cli;
		echo "<br>";
	}

	echo "CONSULTADO";
	*/
?>
 -->