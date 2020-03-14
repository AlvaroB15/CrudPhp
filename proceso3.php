<br>
<br>
<?php

	$conexion = mysqli_connect('localhost:3306', 'root', 'root', 'prueba');
	$codE = $_POST['codigoE'];
	// $sql = "DELETE FROM clientes WHERE cod_cli=$cod";
	$borrar = "DELETE FROM clientes WHERE cod_cli= '$codE'";
	// ".$_POST["codigoI"]."
	
	mysqli_query($conexion, $borrar);
	mysqli_close($conexion);

	echo "<br>";
	echo "<br>";
	echo "<br>";

	echo "ELIMINADO";
?>

<pre>


</pre>

<a href="index.php">VOLVER A MENU</a>



