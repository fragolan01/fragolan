<?

$id_dominio=9999;

if (!$v7) {
	$v7="despliega";
}

if ($v7=="despliega") {
	echo "<br><br>";
	echo "<b><a href='index.php?v7=actualizar'>AGREGAR &raquo;</a></b>";
	echo "<br><br>";
	echo "<b>CONSULTA SUB-CATEGORIAS:</b>";
	echo "<br><br>";

	$query_plataforma_ventas_sub_categos = "SELECT * FROM plataforma_ventas_sub_categos WHERE id_dominio='".$id_dominio."' ORDER BY sub_catego";
	$result_plataforma_ventas_sub_categos = mysql_query($query_plataforma_ventas_sub_categos) or die('Query failed: plataforma_ventas_sub_categos ' . mysql_error());
	while ($line_plataforma_ventas_sub_categos = mysql_fetch_assoc($result_plataforma_ventas_sub_categos)) {
		$data_plataforma_ventas_sub_categos0=$line_plataforma_ventas_sub_categos["id"];
		$data_plataforma_ventas_sub_categos3=$line_plataforma_ventas_sub_categos["sub_catego"];

		echo "<nobr>".
		$data_plataforma_ventas_sub_categos0.".- (<a href='index.php?v7=actualizar&v13=".
		$data_plataforma_ventas_sub_categos0."'>Actualizar</a> | <a href='index.php?v7=eliminar&v13=".
		$data_plataforma_ventas_sub_categos0."'>Eliminar</a>) Sub Categoria: ".
		$data_plataforma_ventas_sub_categos3."</nobr>";
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

		$query_plataforma_ventas_sub_categos = "SELECT id,id_dominio,sub_catego FROM plataforma_ventas_sub_categos WHERE id='".$v13."' AND id_dominio='".$id_dominio."'";
		$result_plataforma_ventas_sub_categos = mysql_query($query_plataforma_ventas_sub_categos) or die('Query failed: plataforma_ventas_sub_categos ' . mysql_error());
		while ($line_plataforma_ventas_sub_categos = mysql_fetch_assoc($result_plataforma_ventas_sub_categos)) {
			$data_plataforma_ventas_sub_categos0=$line_plataforma_ventas_sub_categos["id_dominio"];
			$data_plataforma_ventas_sub_categos3=$line_plataforma_ventas_sub_categos["sub_catego"];
			}

		echo "<form name='actualiza_plataforma_ventas_sub_categos' method='post' action='index.php?v7=actualizalo&v13=".$v13."'>";
			echo "<nobr>Sub Categoria: <input type='text' name='sub_catego' value='".$data_plataforma_ventas_sub_categos3."' size='50'><input type='submit' name='actualizar' value='ACTUALIZAR &raquo;'></nobr>";
		echo "</form>";
	}
	else {
		echo "<br><br>";
		echo "<b>INSERTAR:</b>";
		echo "<br><br>";

		echo "<form name='inserta_plataforma_ventas_sub_categos' method='post' action='index.php?v7=actualizalo'>";
			echo "<nobr>sub_catego de Sub Categoria: <input type='text' name='sub_catego' value='' size='50'><input type='submit' name='insertar' value='INSERTAR &raquo;'></nobr>";
		echo "</form>";
	}
}
if ($v7=="actualizalo") {
	if ($v13) {
		echo "<br><br>";
		echo "<b>UPDATE:</b>";
		echo "<br><br>";

		$sub_catego=$_POST["sub_catego"];
		if (!$sub_catego) {
			echo "<font color=red>ERROR! Falta Subcategoria...</font>";
		}
		else {
			$sql_plataforma_ventas_sub_categos = "UPDATE plataforma_ventas_sub_categos SET sub_catego='".$sub_catego."' WHERE id='".$v13."' AND id_dominio='".$id_dominio."'";
			$result_plataforma_ventas_sub_categos= mysql_query($sql_plataforma_ventas_sub_categos);

			echo "<font color=blue>PERFECTO! Sub Categoria actualizada...</font>";

			echo $recargador;
		}
	}
	else {
		echo "<br><br>";
		echo "<b>INSERT:</b>";
		echo "<br><br>";

		$sub_catego=$_POST["sub_catego"];
		if (!$sub_catego) {
			echo "<font color=red>ERROR! Falta el sub_catego...</font>";
		}
		else {
			$id_dominio=$id_dominio;
			$sub_catego=$sub_catego;
			require($laraiz."inserta_plataforma_ventas_sub_categos.php");

			echo "<font color=green>PERFECTO! Sub Categoria insertado...</font>";

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

	$querydel_plataforma_ventas_sub_categos = "DELETE FROM plataforma_ventas_sub_categos WHERE id='".$v13."' AND id_dominio='".$id_dominio."'";
	$resultdel_plataforma_ventas_sub_categos = mysql_query($querydel_plataforma_ventas_sub_categos);

	echo "<font color=red>LISTO! Sub Categoria eliminada...</font>";

	echo $recargador;
}
?>