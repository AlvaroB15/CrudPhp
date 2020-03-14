<br>
<br>

<?php
	$conexion = mysqli_connect('localhost:3306', 'root', 'root', 'prueba');
	// $cod = $_POST['codigoI'];
	// $nmb = $_POST['nombre'];

//	$sql = "INSERT INTO clientes(cod_cli,nmb_cli) VALUES (´$cod´,'$nmb')";
	$sql = "INSERT INTO clientes(cod_cli,nmb_cli) VALUES  ('".$_POST["codigoI"]."', '".$_POST["nombre"]."')";
	
	mysqli_query($conexion, $sql);
	
	echo "<br>";
	echo "<br>";
	echo "<br>";

	echo "INSERTADO";
	
	mysqli_close($conexion);

?>

<pre>


</pre>

<a href="index.php">VOLVER A MENU</a>