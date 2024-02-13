<?

$id_dominio=9999;

if (!$v7) {
	$v7="despliega";
}

if ($v7=="despliega") {
	echo "<br><br>";
	echo "<b><a href='index.php?v7=actualizar'>AGREGAR &raquo;</a></b>";
	echo "<br><br>";
	echo "<b>CONSULTA:</b>";
	echo "<br><br>";

	$query_plataforma_ventas_precio = "SELECT * FROM plataforma_ventas_precio WHERE id_dominio='".$id_dominio."' ORDER BY nombre";
	$result_plataforma_ventas_precio = mysql_query($query_plataforma_ventas_precio) or die('Query failed: plataforma_ventas_precio ' . mysql_error());
	while ($line_plataforma_ventas_precio = mysql_fetch_assoc($result_plataforma_ventas_precio)) {
		$data_plataforma_ventas_precio0=$line_plataforma_ventas_precio["id"];
		$data_plataforma_ventas_precio3=$line_plataforma_ventas_precio["id_producto"];
        $data_plataforma_ventas_precio3=$line_plataforma_ventas_precio["fecha"];
        $data_plataforma_ventas_precio3=$line_plataforma_ventas_precio["precio"];

		echo "<nobr>".$data_plataforma_ventas_precio0.".- (<a href='index.php?v7=actualizar&v13=".$data_plataforma_ventas_precio0."'>Actualizar</a> | <a href='index.php?v7=eliminar&v13=".$data_plataforma_ventas_precio0."'>Eliminar</a>) Precio: Nombre: ".$data_plataforma_ventas_precio3."</nobr>";
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

		$query_plataforma_ventas_precio = "SELECT id,id_dominio,nombre FROM plataforma_ventas_precio WHERE id='".$v13."' AND id_dominio='".$id_dominio."'";
		$result_plataforma_ventas_precio = mysql_query($query_plataforma_ventas_precio) or die('Query failed: plataforma_ventas_precio ' . mysql_error());
		while ($line_plataforma_ventas_precio = mysql_fetch_assoc($result_plataforma_ventas_precio)) {
            $data_plataforma_ventas_precio0=$line_plataforma_ventas_precio["id"];
            $data_plataforma_ventas_precio3=$line_plataforma_ventas_precio["id_producto"];
            $data_plataforma_ventas_precio3=$line_plataforma_ventas_precio["fecha"];
            $data_plataforma_ventas_precio3=$line_plataforma_ventas_precio["precio"];
    
        }

		echo "<form name='actualiza_plataforma_ventas_precio' method='post' action='index.php?v7=actualizalo&v13=".$v13."'>";
			echo "<nobr>Precio: <input type='text' precio='nprecio' value='".$data_plataforma_ventas_precio3."' size='50'><input type='submit' precio='actualizar' value='ACTUALIZAR &raquo;'></nobr>";
		echo "</form>";
	}
	else {
		echo "<br><br>";
		echo "<b>INSERTAR:</b>";
		echo "<br><br>";

		echo "<form name='inserta_plataforma_ventas_precio' method='post' action='index.php?v7=actualizalo'>";
			echo "<nobr>Precio: <input type='text' name='nombre' value='' size='50'><input type='submit' name='insertar' value='INSERTAR &raquo;'></nobr>";
		echo "</form>";
	}
}
if ($v7=="actualizalo") {
	if ($v13) {
		echo "<br><br>";
		echo "<b>UPDATE:</b>";
		echo "<br><br>";

		$nombre=$_POST["precio"];
		if (!$precio) {
			echo "<font color=red>ERROR! Falta el Nombre...</font>";
		}
		else {
			$sql_plataforma_ventas_precio = "UPDATE plataforma_ventas_precio SET nprecio'".$precio."' WHERE id='".$v13."' AND id_dominio='".$id_dominio."'";
			$result_plataforma_ventas_precio= mysql_query($sql_plataforma_ventas_precio);

			echo "<font color=blue>PERFECTO! Precio actualizado...</font>";

			echo $recargador;
		}
	}
	else {
		echo "<br><br>";
		echo "<b>INSERT:</b>";
		echo "<br><br>";

		$precio=$_POST["precio"];
		if (!$nombre) {
			echo "<font color=red>ERROR! Falta el precio...</font>";
		}
		else {
			$id_dominio=$id_dominio;
			$precio=$precio;
			require($laraiz."inserta_plataforma_ventas_precio.php");

			echo "<font color=green>PERFECTO! Precio insertado...</font>";

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

	$querydel_plataforma_ventas_precio = "DELETE FROM plataforma_ventas_precio WHERE id='".$v13."' AND id_dominio='".$id_dominio."'";
	$resultdel_plataforma_ventas_precio = mysql_query($querydel_plataforma_ventas_precio);

	echo "<font color=red>LISTO! Precio eliminado...</font>";

	echo $recargador;
}
?>