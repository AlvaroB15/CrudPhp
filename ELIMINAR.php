<!DOCTYPE html>
<html>

<head>
	<title>ELIMINAR CLIENTE</title>
	<style>
		.btn{
			margin: 15px 0px;			
		}
	</style>
</head>

<body>
	<p>ELIMINAR</p>
	<pre>


	</pre>
	<form action= "proceso3.php" method = "post">
		<center>
			<table>
				<tr>
					<td>Codigo:</td>
					<td><input type="text" id="codigoE" name="codigoE"></td>
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