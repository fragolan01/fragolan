<?

$id_dominio=9999;

if (!$v7) {
	$v7="despliega";
}

if ($v7=="despliega") {
	echo "<br><br>";
	echo "<b><a href='index.php?v7=actualizar'>AGREGAR &raquo;</a></b>";
	echo "<br><br>";
	echo "<b>CONSULTA MARCA: </b>";
	echo "<br><br>";

	$query_plataforma_ventas_marcas = "SELECT * FROM plataforma_ventas_marcas WHERE id_dominio='".$id_dominio."' ORDER BY marca";
	$result_plataforma_ventas_marcas = mysql_query($query_plataforma_ventas_marcas) or die('Query failed: plataforma_ventas_marcas ' . mysql_error());
	while ($line_plataforma_ventas_marcas = mysql_fetch_assoc($result_plataforma_ventas_marcas)) {
		$data_plataforma_ventas_marcas0=$line_plataforma_ventas_marcas["id"];
		$data_plataforma_ventas_marcas3=$line_plataforma_ventas_marcas["marca"];

		echo "<nobr>".
		$data_plataforma_ventas_marcas0.".- (<a href='index.php?v7=actualizar&v13=".
		$data_plataforma_ventas_marcas0."'>Actualizar</a> | <a href='index.php?v7=eliminar&v13=".
		$data_plataforma_ventas_marcas0."'>Eliminar</a>) Marca ".
		$data_plataforma_ventas_marcas3."</nobr>";
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

		$query_plataforma_ventas_marcas = "SELECT id,id_dominio,marca FROM plataforma_ventas_marcas WHERE id_dominio='".$v13 ."' AND id_dominio='".$id_dominio."'";
		$result_plataforma_ventas_marcas = mysql_query($query_plataforma_ventas_marcas) or die('Query failed: plataforma_ventas_marcas ' . mysql_error());
		while ($line_plataforma_ventas_marcas = mysql_fetch_assoc($result_plataforma_ventas_marcas)) {
			$data_plataforma_ventas_marcas0=$line_plataforma_ventas_marcas["id"];
			$data_plataforma_ventas_marcas3=$line_plataforma_ventas_marcas["marca"];
		}

		echo "<form name='actualiza_plataforma_ventas_marcas' method='post' action='index.php?v7=actualizalo&v13=".$v13."'>";
			echo "<nobr>Marca: <input type='text' name='marca' value='".$data_plataforma_ventas_marcas3."' size='50'><input type='submit' name='actualizar' value='ACTUALIZAR &raquo;'></nobr>";
		echo "</form>";
	}
	else {
		echo "<br><br>";
		echo "<b>INSERTAR:</b>";
		echo "<br><br>";

		echo "<form name='inserta_plataforma_ventas_marcas' method='post' action='index.php?v7=actualizalo'>";
			echo "<nobr>Marca: <input type='text' name='marca' value='' size='50'><input type='submit' name='insertar' value='INSERTAR &raquo;'></nobr>";
		echo "</form>";
	}
}
if ($v7=="actualizalo") {
	if ($v13) {
		echo "<br><br>";
		echo "<b>UPDATE:</b>";
		echo "<br><br>";

		$marca=$_POST["marca"];
		if (!$marca) {
			echo "<font color=red>ERROR! Falta el marca...</font>";
		}
		else {
			$sql_plataforma_ventas_marcas = "UPDATE plataforma_ventas_marcas SET marca='".$marca."' WHERE id='".$v13."' AND id_dominio='".$id_dominio."'";
			$result_plataforma_ventas_marcas= mysql_query($sql_plataforma_ventas_marcas);

			echo "<font color=blue>PERFECTO! Marca actualizada...</font>";

			echo $recargador;
		}
	}
	else {
		echo "<br><br>";
		echo "<b>INSERT:</b>";
		echo "<br><br>";

		$marca=$_POST["marca"];
		if (!$marca) {
			echo "<font color=red>ERROR! Falta el marca...</font>";
		}
		else {
			$id_dominio=$id_dominio;
			$marca=$marca;
			require($laraiz."inserta_plataforma_ventas_marcas.php");

			echo "<font color=green>PERFECTO! Marca insertado...</font>";

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

	$querydel_plataforma_ventas_marcas = "DELETE FROM plataforma_ventas_marcas WHERE id='".$v13."' AND id_dominio='".$id_dominio."'";
	$resultdel_plataforma_ventas_marcas = mysql_query($querydel_plataforma_ventas_marcas);

	echo "<font color=red>LISTO!marca eliminado...</font>";

	echo $recargador;
}
?>