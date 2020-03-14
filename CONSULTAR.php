<!DOCTYPE html>
<html>
<head>
	<title>CONSULTAR CLIENTE</title>
	<style>
		.btn{
			margin: 15px 0px;			
		}
	</style>
</head>

<body>
	<p>CONSULTAR</p>
	<pre>


	</pre>
	<form action= "proceso1.php" method = "post">
		<center>
			<table>
				<tr>
					<td>codigo:</td>
					<td><input type="text" id= "codigo" name="codigo"></td>
				</tr>


				<tr>
					<td></td>
					<td><input class="btn" type="submit" value="ENVIAR"></td>
				</tr>

			</table>
			<a href="index.php">MENU</a>
			
		</center>

	</form>

	<article class="center">
		<strong>Codigo de los Clientes</strong>
		<p></p>
		<?php
			
			$conexion = mysqli_connect('localhost:3306', 'root', 'root', 'prueba');
			$sql = "select cod_cli from clientes";
			$consulta = $conexion-> query($sql);
		
			while ($f = $consulta->fetch_assoc()) {
				print "Codigo: {$f["cod_cli"]}";
				echo "<br>";
			}
			
			
			echo "<br>";
			echo "<br>";
			echo "CONSULTA ";
			mysqli_close($conexion);
		
		?>
	</article>

</body>

</html>