<!DOCTYPE html>
<html>
<head>
	<title>ADICIONAR CLIENTE</title>
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
	<form action= "proceso2.php" method = "post">
		<center>
			<table>
				<tr>
					<td>codigo:</td>
					<td><input type="text" id= "codigoI" name="codigoI"></td>
				</tr>

				<tr>
					<td>Nombre:</td>
					<td><input class="btn" type="text" id= "nombre" name="nombre"></td>
				</tr>

				<tr>
					<td></td>
					<td><input class="btn" type="submit" value="ENVIAR"></td>
				</tr>

			</table>
			<a href="index.php">MENU</a>
			
		</center>

	</form>

	<article>
		<?php include("mostrarDatos.php")	?>
	</article>

</body>
</html>