<?

$id_dominio=9999;

if (!$v7) {
	$v7="despliega";
}

if ($v7=="despliega") {
	echo "<br><br>";
	echo "<b><a href='index.php?v7=actualizar'>AGREGAR &raquo;</a></b>";
	echo "<br><br>";
	echo "<b>CONSULTA PLATAFORMA:</b>";
	echo "<br><br>";

	$query_plataforma_ventas_plataformas = "SELECT * FROM plataforma_ventas_plataformas WHERE id_dominio='".$id_dominio."' ORDER BY plataforma";
	$result_plataforma_ventas_plataformas = mysql_query($query_plataforma_ventas_plataformas) or die('Query failed: plataforma_ventas_plataformas ' . mysql_error());
	while ($line_plataforma_ventas_plataformas = mysql_fetch_assoc($result_plataforma_ventas_plataformas)) {
		$data_plataforma_ventas_plataformas0=$line_plataforma_ventas_plataformas["id"];
		$data_plataforma_ventas_plataformas3=$line_plataforma_ventas_plataformas["plataforma"];
		
		echo "<nobr>".
		$data_plataforma_ventas_plataformas0.".- (<a href='index.php?v7=actualizar&v13=".
		$data_plataforma_ventas_plataformas0."'>Actualizar</a> | <a href='index.php?v7=eliminar&v13=".
		$data_plataforma_ventas_plataformas0."'>Eliminar</a>) Plataforma: ".
		$data_plataforma_ventas_plataformas3."</nobr>";
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

		$query_plataforma_ventas_plataformas = "SELECT id,id_dominio,plataforma FROM plataforma_ventas_plataformas WHERE id='".$v13."' AND id_dominio='".$id_dominio."'";
		$result_plataforma_ventas_plataformas = mysql_query($query_plataforma_ventas_plataformas) or die('Query failed: plataforma_ventas_plataformas ' . mysql_error());
		while ($line_plataforma_ventas_plataformas = mysql_fetch_assoc($result_plataforma_ventas_plataformas)) {
			$data_plataforma_ventas_plataformas0=$line_plataforma_ventas_plataformas["id"];
			$data_plataforma_ventas_plataformas3=$line_plataforma_ventas_plataformas["plataforma"];
		}

		echo "<form name='actualiza_plataforma_ventas_plataformas' method='post' action='index.php?v7=actualizalo&v13=".$v13."'>";
			echo "<nobr>Plataforma: <input type='text' name='plataforma' value='".$data_plataforma_ventas_plataformas3."' size='50'><input type='submit' name='actualizar' value='ACTUALIZAR &raquo;'></nobr>";
		echo "</form>";
	}
	else {
		echo "<br><br>";
		echo "<b>INSERTAR:</b>";
		echo "<br><br>";

		echo "<form name='inserta_plataforma_ventas_plataformas' method='post' action='index.php?v7=actualizalo'>";
			echo "<nobr>Plataforma: <input type='text' name='plataforma' value='' size='50'><input type='submit' name='insertar' value='INSERTAR &raquo;'></nobr>";
		echo "</form>";
	}
}
if ($v7=="actualizalo") {
	if ($v13) {
		echo "<br><br>";
		echo "<b>UPDATE:</b>";
		echo "<br><br>";

		$plataforma=$_POST["plataforma"];
		if (!$plataforma) {
			echo "<font color=red>ERROR! Falta el plataforma...</font>";
		}
		else {
			$sql_plataforma_ventas_plataformas = "UPDATE plataforma_ventas_plataformas SET plataforma='".$plataforma."' WHERE id='".$v13."' AND id_dominio='".$id_dominio."'";
			$result_plataforma_ventas_plataformas= mysql_query($sql_plataforma_ventas_plataformas);

			echo "<font color=blue>PERFECTO! Plataforma actualizada...</font>";

			echo $recargador;
		}
	}
	else {
		echo "<br><br>";
		echo "<b>INSERT:</b>";
		echo "<br><br>";

		$plataforma=$_POST["plataforma"];
		if (!$plataforma) {
			echo "<font color=red>ERROR! Falta el plataforma...</font>";
		}
		else {
			$id_dominio=$id_dominio;
			$plataforma=$plataforma;
			require($laraiz."inserta_plataforma_ventas_plataformas.php");

			echo "<font color=green>PERFECTO! Plataforma insertada...</font>";

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

	$querydel_plataforma_ventas_plataformas = "DELETE FROM plataforma_ventas_plataformas WHERE id='".$v13."' AND id_dominio='".$id_dominio."'";
	$resultdel_plataforma_ventas_plataformas = mysql_query($querydel_plataforma_ventas_plataformas);

	echo "<font color=red>LISTO! Plataforma eliminada...</font>";

	echo $recargador;
}
?>