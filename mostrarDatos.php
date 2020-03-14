<strong>Datos de los Clientes</strong>
		<p></p>
		<?php
			$conexion = mysqli_connect('localhost:3306', 'root', 'root', 'prueba');
			$sql = "select cod_cli, nmb_cli from clientes ";
			$consulta = $conexion->query($sql);

			while ($f = $consulta->fetch_object()) {
				echo $f->cod_cli.' ';
				echo $f->nmb_cli;
				echo "<br>";
			}
			mysqli_close($conexion);


			// $conexion = mysqli_connect('localhost', 'root', '', 'pruebas');
			// $sql = "select cod_cli, nmb_cli from clientes";
			// $consulta = $conexion->query($sql);

			// while ($f = $consulta->fetch_assoc()) {
			// 	print "Codigo: {$f["cod_cli"]} ,  Nombre: {$f["nmb_cli"]}";
			// 	echo "<br>";
			// }
			// mysqli_close($conexion);
			// echo "<br>";
		?>