<?

$id_dominio=9999;

if (!$v7) {
	$v7="despliega";
}

if ($v7=="despliega") {
	echo "<br><br>";
	echo "<b><a href='index.php?v7=actualizar'>AGREGAR &raquo;</a></b>";
	echo "<br><br>";
	echo "<b>CONSULTA TIPO DE CAMBIO:</b>";
	echo "<br><br>";

	$query_plataforma_ventas_tipo_cambio = "SELECT * FROM plataforma_ventas_tipo_cambio WHERE id_dominio='".$id_dominio."' ORDER BY normal";
	$result_plataforma_ventas_tipo_cambio = mysql_query($query_plataforma_ventas_tipo_cambio) or die('Query failed: plataforma_ventas_tipo_cambio ' . mysql_error());
	while ($line_plataforma_ventas_tipo_cambio = mysql_fetch_assoc($result_plataforma_ventas_tipo_cambio)) {
		$data_plataforma_ventas_tipo_cambio0=$line_plataforma_ventas_tipo_cambio["id"];
		$data_plataforma_ventas_tipo_cambio3=$line_plataforma_ventas_tipo_cambio["fecha"];
		$data_plataforma_ventas_tipo_cambio4=$line_plataforma_ventas_tipo_cambio["normal"];
		$data_plataforma_ventas_tipo_cambio5=$line_plataforma_ventas_tipo_cambio["preferencial"];
		$data_plataforma_ventas_tipo_cambio6=$line_plataforma_ventas_tipo_cambio["un_dia"];
		$data_plataforma_ventas_tipo_cambio7=$line_plataforma_ventas_tipo_cambio["una_semana"];


		echo 
			"<nobr>".
				$data_plataforma_ventas_tipo_cambio0.".- (<a href='index.php?v7=actualizar&v13=".
				$data_plataforma_ventas_tipo_cambio0."'>Actualizar</a> | <a href='index.php?v7=eliminar&v13=".
				$data_plataforma_ventas_tipo_cambio0."'>Eliminar</a>) Fecha: ".
				$data_plataforma_ventas_tipo_cambio3. "T.C Normal: ".
				$data_plataforma_ventas_tipo_cambio4. " Preferencial: ".
				$data_plataforma_ventas_tipo_cambio5. " Un dia: ".
				$data_plataforma_ventas_tipo_cambio6. " Una semana: ".
				$data_plataforma_ventas_tipo_cambio7.
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

		$query_plataforma_ventas_tipo_cambio = "SELECT id,id_dominio,fecha,normal,preferencial,un_dia FROM plataforma_ventas_tipo_cambio WHERE id='".$v13."' AND id_dominio='".$id_dominio."'";
		$result_plataforma_ventas_tipo_cambio = mysql_query($query_plataforma_ventas_tipo_cambio) or die('Query failed: plataforma_ventas_tipo_cambio ' . mysql_error());
		while ($line_plataforma_ventas_tipo_cambio = mysql_fetch_assoc($result_plataforma_ventas_tipo_cambio)) {
			$data_plataforma_ventas_tipo_cambio0=$line_plataforma_ventas_tipo_cambio["id"];
			$data_plataforma_ventas_tipo_cambio3=$line_plataforma_ventas_tipo_cambio["fecha"];
			$data_plataforma_ventas_tipo_cambio4=$line_plataforma_ventas_tipo_cambio["normal"];
			$data_plataforma_ventas_tipo_cambio5=$line_plataforma_ventas_tipo_cambio["preferencial"];
			$data_plataforma_ventas_tipo_cambio6=$line_plataforma_ventas_tipo_cambio["un_dia"];


		}

		echo "<form name='actualiza_plataforma_ventas_tipo_cambio' method='post' action='index.php?v7=actualizalo&v13=".$v13."'>";
			echo "<nobr>
					Fecha: <input type='date' name='fecha' value='".$data_plataforma_ventas_tipo_cambio3."' size='50'>
					T.C Normal: <input type='text' name='normal' value='".$data_plataforma_ventas_tipo_cambio4."' size='50'>
					Preferencial: <input type='text' name='preferencial' value='".$data_plataforma_ventas_tipo_cambio5."' size='50'>
					Un dia: <input type='text' name='un_dia' value='".$data_plataforma_ventas_tipo_cambio6."' size='50'>

					<input type='submit' name='actualizar' value='ACTUALIZAR &raquo;'></nobr>";
		echo "</form>";
	}
	else {
		echo "<br><br>";
		echo "<b>INSERTAR:</b>";
		echo "<br><br>";

		echo "<form name='inserta_plataforma_ventas_tipo_cambio' method='post' action='index.php?v7=actualizalo'>";
			echo "<nobr>
					Fecha: <input type='date' name='fecha' value='' size='50'>
					Normal: <input type='text' name='normal' value='' size='50'>
					preferencial: <input type='text' name='preferencial' value='' size='50'>
					Un dia: <input type='text' name='un_dia' value='' size='50'>

					<input type='submit' name='insertar' value='INSERTAR &raquo;'></nobr>";
		echo "</form>";
	}
}
if ($v7=="actualizalo") {
	if ($v13) {
		echo "<br><br>";
		echo "<b>UPDATE:</b>";
		echo "<br><br>";

		$fecha=$_POST["fecha"];
		$normal=$_POST["normal"];
		$preferencial=$_POST["preferencial"];
		$un_dia=$_POST["un_dia"];

		if (!$normal) {
			echo "<font color=red>ERROR! Falta el tipo de cambio...</font>";
		}
		else {
			$sql_plataforma_ventas_tipo_cambio = "UPDATE plataforma_ventas_tipo_cambio SET fecha='".$fecha."', normal='".$normal."', preferencial='".$preferencial."', un_dia='".$un_dia."' WHERE id='".$v13."' AND id_dominio='".$id_dominio."'";
			$result_plataforma_ventas_tipo_cambio= mysql_query($sql_plataforma_ventas_tipo_cambio);

			echo "<font color=blue>PERFECTO! Tipo de cambio...</font>";

			echo $recargador;
		}
	}
	else {
		echo "<br><br>";
		echo "<b>INSERT:</b>";
		echo "<br><br>";

		$fecha=$_POST["fecha"];
		$normal=$_POST["normal"];
		$preferencial=$_POST["preferencial"];
		$un_dia=$_POST["un_dia"];

		if (!$normal) {
			echo "<font color=red>ERROR! Falta el Tipo de cambio...</font>";
		}
		else {
			$id_dominio=$id_dominio;
			$fecha=$fecha;
			$normal=$normal;
			$preferencial=$preferencial;
			$un_dia=$un_dia;
			require($laraiz."inserta_plataforma_ventas_tipo_cambio.php");

			echo "<font color=green>PERFECTO! Tipo de cambio insertado...</font>";

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

	$querydel_plataforma_ventas_tipo_cambio = "DELETE FROM plataforma_ventas_tipo_cambio WHERE id='".$v13."' AND id_dominio='".$id_dominio."'";
	$resultdel_plataforma_ventas_tipo_cambio = mysql_query($querydel_plataforma_ventas_tipo_cambio);

	echo "<font color=red>LISTO! Tipo de Cambio eliminado...</font>";

	echo $recargador;
}
?>