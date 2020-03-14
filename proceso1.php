<br>
<br>
<?php
/*	FORMA HECHA EN CLASE 

	$conexion = new mysqli('localhost', 'root', '', 'pruebas','3308');
	
	$cod = $_POST['codigo'];
	$sql = "select cod_cli, nmb_cli from clientes where cod_cli='$cod'";
	$consulta = $conexion-> query($sql);

	while ($f = $consulta->fetch_object()) {
		echo $f->cod_cli.' '; 
		echo $f->nmb_cli;
	}
	
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "CONSULTA ";
*/

	$conexion = mysqli_connect('localhost:3306', 'root', 'root', 'prueba');
	
	$cod = $_POST['codigo'];

	$sql = "SELECT cod_cli, nmb_cli FROM clientes WHERE cod_cli='$cod'";
	
	$consultas = $conexion-> query($sql);

	while ($f = $consultas->fetch_assoc()) {
		print "Codigo: {$f["cod_cli"]} ,  Nombre: {$f["nmb_cli"]}";
		echo "<br";

	}
	
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "CONSULTA ";
	mysqli_close($conexion);

?>

<pre>


</pre>

<a href="index.php">VOLVER A MENU</a>