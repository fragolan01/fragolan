<?


// Muestra todos los errores excepto los de nivel de advertencia
error_reporting(E_ALL & ~E_WARNING);

// Mostrar los errores en el navegador
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$id_dominio=9999;

if (!$v7) {
	$v7="despliega";
}

if ($v7=="despliega") {
	echo "<br><br>";
	echo "<b><a href='index.php?v7=actualizar'>AGREGAR &raquo;</a></b>";
	echo "<br><br>";
	echo "<b>CONSULTA ENVIOS:</b>";
	echo "<br><br>";

	$query_plataforma_ventas_envios = "SELECT * FROM plataforma_ventas_envios WHERE id_dominio='".$id_dominio."' ORDER BY envio";
	$result_plataforma_ventas_envios = mysql_query($query_plataforma_ventas_envios) or die('Query failed: plataforma_ventas_envios ' . mysql_error());
	while ($line_plataforma_ventas_envios = mysql_fetch_assoc($result_plataforma_ventas_envios)) {
		$data_plataforma_ventas_envios0=$line_plataforma_ventas_envios["id"];
		$data_plataforma_ventas_envios3=$line_plataforma_ventas_envios["envio"];
		$data_plataforma_ventas_envios4=$line_plataforma_ventas_envios["costo"];


		echo 
			"<nobr>".
				$data_plataforma_ventas_envios0.".- (<a href='index.php?v7=actualizar&v13=".
				$data_plataforma_ventas_envios0."'>Actualizar</a> | <a href='index.php?v7=eliminar&v13=".
				$data_plataforma_ventas_envios0."'>Eliminar</a>) Envio ".
				$data_plataforma_ventas_envios3.  " - Costo: " .
				$data_plataforma_ventas_envios4.

			"</nobr>";
		
		echo "<br>";
	}
}
if ($v7=="actualizar") {
	echo "<br><br>";
	echo "<b><a href='index.php'>&laquo; INICIO</a></b>";
	if ($v13) {
		echo "<br><br>";
		echo "<b>ACTUALIZAR:</b>";
		echo "<br><br>";

		$query_plataforma_ventas_envios = "SELECT id,id_dominio,envio,costo FROM plataforma_ventas_envios WHERE id='".$v13."' AND id_dominio='".$id_dominio."'";
		$result_plataforma_ventas_envios = mysql_query($query_plataforma_ventas_envios) or die('Query failed: plataforma_ventas_envios ' . mysql_error());
		while ($line_plataforma_ventas_envios = mysql_fetch_assoc($result_plataforma_ventas_envios)) {
			$data_plataforma_ventas_envios0=$line_plataforma_ventas_envios["id"];
			$data_plataforma_ventas_envios3=$line_plataforma_ventas_envios["envio"];
			$data_plataforma_ventas_envios4=$line_plataforma_ventas_envios["costo"];
		}

		echo "<form name='actualiza_plataforma_ventas_envios' method='post' action='index.php?v7=actualizalo&v13=".$v13."'>";
			echo "<nobr>
					Envio <input type='text' name='envio' value='".$data_plataforma_ventas_envios3."' size='50'>
					Costo <input type='text' name='costo' value='".$data_plataforma_ventas_envios4."' size='50'>
					<input type='submit' name='actualizar' value='ACTUALIZAR &raquo;'>
				</nobr>";
		echo "</form>";
	}
	else {
		echo "<br><br>";
		echo "<b>INSERTAR:</b>";
		echo "<br><br>";

		echo "<form name='inserta_plataforma_ventas_envios' method='post' action='index.php?v7=actualizalo'>";
			echo "<nobr>
					Envio: <input type='text' name='envio' value='' size='50'>
					Costo: <input type='text' name='costo' value='' size='50'>
					<input type='submit' name='insertar' value='INSERTAR &raquo;'>
				</nobr>";
		echo "</form>";
	}
}
if ($v7=="actualizalo") {
	if ($v13) {

		echo "<br><br>";
		echo "<b>UPDATE:</b>";
		echo "<br><br>";


		$costo=$_POST['costo'];
		$envio=$_POST["envio"];
		if (!$envio and !$costo) {
			echo "<font color=red>ERROR! Falta el Envio y Costo...</font>";
		}
		else {
			// $sql_plataforma_ventas_envios = "UPDATE plataforma_ventas_envios SET envio='".$envio."' WHERE id='".$v13."' AND id_dominio='".$id_dominio."'";
			$sql_plataforma_ventas_envios = "UPDATE plataforma_ventas_envios SET envio='".$envio."', costo='".$costo."' WHERE id='".$v13."' AND id_dominio='".$id_dominio."'";
			$result_plataforma_ventas_envios= mysql_query($sql_plataforma_ventas_envios);
			echo "<font color=blue>PERFECTO! Envio actualizado...</font>";

			echo $recargador;
		}
	}
	else {
		echo "<br><br>";
		echo "<b>INSERT:</b>";
		echo "<br><br>";

		$costo=$_POST['costo'];
		$envio=$_POST["envio"];
		if (!$envio and !$costo) {
			echo "<font color=red>ERROR! Falta el Envio o Costo...</font>";
		}
		else {
			$id_dominio=$id_dominio;
			$envio=$envio;
			$costo=$costo;
			require($laraiz."inserta_plataforma_ventas_envios.php");

			echo "<font color=green>PERFECTO! Envio insertado...</font>";

			echo $recargador;
		}
	}
}
if ($v7=="eliminar") {
	echo "<br><br>";
	echo "<b><a href='index.php'>&laquo; INICIO</a></b>";
	echo "<br><br>";
	echo "<b>ELIMINAR:</b>";
	echo "<br><br>";
	echo "<nobr>En verdad deseas eliminar este registro? <a href='index.php?v7=eliminalo&v13=".$v13."'>SI</a> | <a href='index.php'>NO</a></nobr>";
}
if ($v7=="eliminalo") {
	echo "<br><br>";
	echo "<b>DELETE:</b>";
	echo "<br><br>";

	$querydel_plataforma_ventas_envios = "DELETE FROM plataforma_ventas_envios WHERE id='".$v13."' AND id_dominio='".$id_dominio."'";
	$resultdel_plataforma_ventas_envios = mysql_query($querydel_plataforma_ventas_envios);

	echo "<font color=red>LISTO! Envio eliminado...</font>";

	echo $recargador;
}
?>