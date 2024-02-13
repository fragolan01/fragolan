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

	$query_plataforma_ventas_tipo_cambio = "SELECT * FROM plataforma_ventas_tipo_cambio WHERE id_dominio='".$id_dominio."' ORDER BY nombre";
	$result_plataforma_ventas_tipo_cambio = mysql_query($query_plataforma_ventas_tipo_cambio) or die('Query failed: plataforma_ventas_tipo_cambio ' . mysql_error());
	while ($line_plataforma_ventas_tipo_cambio = mysql_fetch_assoc($result_plataforma_ventas_tipo_cambio)) {

		$data_plataforma_ventas_tipo_cambio0=$line_plataforma_ventas_tipo_cambio["id"];
		$data_plataforma_ventas_tipo_cambio3=$line_plataforma_ventas_tipo_cambio["id_dominio"];
        $data_plataforma_ventas_tipo_cambio3=$line_plataforma_ventas_tipo_cambio["id_producto"];
        $data_plataforma_ventas_tipo_cambio3=$line_plataforma_ventas_tipo_cambio["fecha"];
		$data_plataforma_ventas_tipo_cambio3=$line_plataforma_ventas_tipo_cambio["normal"];
        $data_plataforma_ventas_tipo_cambio3=$line_plataforma_ventas_tipo_cambio["preferencial"];
		$data_plataforma_ventas_tipo_cambio3=$line_plataforma_ventas_tipo_cambio["un_dia"];
        $data_plataforma_ventas_tipo_cambio3=$line_plataforma_ventas_tipo_cambio["una_semana"];
		$data_plataforma_ventas_tipo_cambio3=$line_plataforma_ventas_tipo_cambio["dos_semanas"];
        $data_plataforma_ventas_tipo_cambio3=$line_plataforma_ventas_tipo_cambio["tres_semanas"];
		$data_plataforma_ventas_tipo_cambio3=$line_plataforma_ventas_tipo_cambio["un_mes"];

		echo "<nobr>".$data_plataforma_ventas_tipo_cambio0.".- (<a href='index.php?v7=actualizar&v13=".$data_plataforma_ventas_tipo_cambio0."'>Actualizar</a> | <a href='index.php?v7=eliminar&v13=".$data_plataforma_ventas_tipo_cambio0."'>Eliminar</a>) Tipo de Cambio: ".$data_plataforma_ventas_tipo_cambio3."</nobr>";
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

		$query_plataforma_ventas_tipo_cambio = "SELECT id,id_dominio,normal FROM plataforma_ventas_tipo_cambio WHERE id='".$v13."' AND id_dominio='".$id_dominio."'";
		$result_plataforma_ventas_tipo_cambio = mysql_query($query_plataforma_ventas_tipo_cambio) or die('Query failed: plataforma_ventas_tipo_cambio ' . mysql_error());
		while ($line_plataforma_ventas_tipo_cambio = mysql_fetch_assoc($result_plataforma_ventas_tipo_cambio)) {

            $data_plataforma_ventas_tipo_cambio0=$line_plataforma_ventas_tipo_cambio["id"];
            $data_plataforma_ventas_tipo_cambio3=$line_plataforma_ventas_tipo_cambio["id_dominio"];
            $data_plataforma_ventas_tipo_cambio3=$line_plataforma_ventas_tipo_cambio["id_producto"];
            $data_plataforma_ventas_tipo_cambio3=$line_plataforma_ventas_tipo_cambio["fecha"];
            $data_plataforma_ventas_tipo_cambio3=$line_plataforma_ventas_tipo_cambio["normal"];
            $data_plataforma_ventas_tipo_cambio3=$line_plataforma_ventas_tipo_cambio["preferencial"];
            $data_plataforma_ventas_tipo_cambio3=$line_plataforma_ventas_tipo_cambio["un_dia"];
            $data_plataforma_ventas_tipo_cambio3=$line_plataforma_ventas_tipo_cambio["una_semana"];
            $data_plataforma_ventas_tipo_cambio3=$line_plataforma_ventas_tipo_cambio["dos_semanas"];
            $data_plataforma_ventas_tipo_cambio3=$line_plataforma_ventas_tipo_cambio["tres_semanas"];
            $data_plataforma_ventas_tipo_cambio3=$line_plataforma_ventas_tipo_cambio["un_mes"];
        }

		echo "<form fecha='actualiza_plataforma_ventas_tipo_cambio' method='post' action='index.php?v7=actualizalo&v13=".$v13."'>";
			echo "<nobr>Tipo de cambio Fecha : <input type='text' tc_fecha='fecha' value='".$data_plataforma_ventas_tipo_cambio3."' size='50'><input type='submit' tc_fecha='actualizar' value='ACTUALIZAR &raquo;'></nobr>";
		echo "</form>";

        echo "<form normal='actualiza_plataforma_ventas_tipo_cambio' method='post' action='index.php?v7=actualizalo&v13=".$v13."'>";
            echo "<nobr>Tipo de cambio normal : <input type='text' normal='normal' value='".$data_plataforma_ventas_tipo_cambio3."' size='50'><input type='submit' normal='actualizar' value='ACTUALIZAR &raquo;'></nobr>";
        echo "</form>";


        // echo "<nobr>Tipo de cambio Normal: <input type='text' normal='normal' value='".$data_plataforma_ventas_tipo_cambio3."' size='50'><input type='submit' normal='actualizar' value='ACTUALIZAR &raquo;'></nobr>";
        // echo "<nobr>Tipo de cambio Preferencial: <input type='text' preferencial='preferencial' value='".$data_plataforma_ventas_tipo_cambio3."' size='50'><input type='submit' preferencial='actualizar' value='ACTUALIZAR &raquo;'></nobr>";
        // echo "<nobr>Tipo de cambio un_dia: <input type='text' un_dia='un_dia' value='".$data_plataforma_ventas_tipo_cambio3."' size='50'><input type='submit' un_dia='actualizar' value='ACTUALIZAR &raquo;'></nobr>";
        // echo "<nobr>Tipo de cambio una_semana: <input type='text' una_sema='una_semana' value='".$data_plataforma_ventas_tipo_cambio3."' size='50'><input type='submit' una_semana='actualizar' value='ACTUALIZAR &raquo;'></nobr>";
        // echo "<nobr>Tipo de cambio dos_semanas: <input type='text' dos_semas='dos_semanas' value='".$data_plataforma_ventas_tipo_cambio3."' size='50'><input type='submit' dos_semanas='actualizar' value='ACTUALIZAR &raquo;'></nobr>";
        // echo "<nobr>Tipo de cambio tres_semanas: <input type='text' dtres_semanas='tres_semanas' value='".$data_plataforma_ventas_tipo_cambio3."' size='50'><input type='submit' tres_semanas='actualizar' value='ACTUALIZAR &raquo;'></nobr>";
        // echo "<nobr>Tipo de cambio un_mes: <input type='text' un_mes='un_mes' value='".$data_plataforma_ventas_tipo_cambio3."' size='50'><input type='submit' un_mes='actualizar' value='ACTUALIZAR &raquo;'></nobr>";

	}
	else {
		echo "<br><br>";
		echo "<b>INSERTAR:</b>";
		echo "<br><br>";

        echo "<form fecha='actualiza_plataforma_ventas_tipo_cambio' method='post' action='index.php?v7=actualizalo&v13=".$v13."'>";
            echo "<nobr>Tipo de cambio Fecha : <input type='text' tc_fecha='fecha' value='".$data_plataforma_ventas_tipo_cambio3."' size='50'><input type='submit' tc_fecha='actualizar' value='ACTUALIZAR &raquo;'></nobr>";
        echo "</form>";

        echo "<form normal='actualiza_plataforma_ventas_tipo_cambio' method='post' action='index.php?v7=actualizalo&v13=".$v13."'>";
            echo "<nobr>Tipo de cambio normal : <input type='text' normal='normal' value='".$data_plataforma_ventas_tipo_cambio3."' size='50'><input type='submit' normal='actualizar' value='ACTUALIZAR &raquo;'></nobr>";
        echo "</form>";


		// echo "<form name='inserta_plataforma_ventas_tipo_cambio' method='post' action='index.php?v7=actualizalo'>";
        // echo "<nobr>Tipo de cambio Fecha : <input type='text' tc_fecha='fecha' value='".$data_plataforma_ventas_tipo_cambio3."' size='50'><input type='submit' tc_fecha='actualizar' value='ACTUALIZAR &raquo;'></nobr>";
        // echo "<nobr>Tipo de cambio Normal: <input type='text' normal='normal' value='".$data_plataforma_ventas_tipo_cambio3."' size='50'><input type='submit' normal='actualizar' value='ACTUALIZAR &raquo;'></nobr>";
        // echo "<nobr>Tipo de cambio Preferencial: <input type='text' preferencial='preferencial' value='".$data_plataforma_ventas_tipo_cambio3."' size='50'><input type='submit' preferencial='actualizar' value='ACTUALIZAR &raquo;'></nobr>";
        // echo "<nobr>Tipo de cambio un_dia: <input type='text' un_dia='un_dia' value='".$data_plataforma_ventas_tipo_cambio3."' size='50'><input type='submit' un_dia='actualizar' value='ACTUALIZAR &raquo;'></nobr>";
        // echo "<nobr>Tipo de cambio una_semana: <input type='text' una_sema='una_semana' value='".$data_plataforma_ventas_tipo_cambio3."' size='50'><input type='submit' una_semana='actualizar' value='ACTUALIZAR &raquo;'></nobr>";
        // echo "<nobr>Tipo de cambio dos_semanas: <input type='text' dos_semas='dos_semanas' value='".$data_plataforma_ventas_tipo_cambio3."' size='50'><input type='submit' dos_semanas='actualizar' value='ACTUALIZAR &raquo;'></nobr>";
        // echo "<nobr>Tipo de cambio tres_semanas: <input type='text' dtres_semanas='tres_semanas' value='".$data_plataforma_ventas_tipo_cambio3."' size='50'><input type='submit' tres_semanas='actualizar' value='ACTUALIZAR &raquo;'></nobr>";
        // echo "<nobr>Tipo de cambio un_mes: <input type='text' un_mes='un_mes' value='".$data_plataforma_ventas_tipo_cambio3."' size='50'><input type='submit' un_mes='actualizar' value='ACTUALIZAR &raquo;'></nobr>";
    echo "</form>";
	}
}
if ($v7=="actualizalo") {
	if ($v13) {
		echo "<br><br>";
		echo "<b>UPDATE:</b>";
		echo "<br><br>";

		$normal=$_POST["normal"];
		if (!$normal) {
			echo "<font color=red>ERROR! Falta el tipo de cambio...</font>";
		}
		else {
			$sql_plataforma_ventas_tipo_cambio = "UPDATE plataforma_ventas_tipo_cambio SET normal='".$normal."' WHERE id='".$v13."' AND id_dominio='".$id_dominio."'";
			$result_plataforma_ventas_tipo_cambio= mysql_query($sql_plataforma_ventas_tipo_cambio);

			echo "<font color=blue>PERFECTO! Tipo de cambio actualizado...</font>";

			echo $recargador;
		}
	}
	else {
		echo "<br><br>";
		echo "<b>INSERT:</b>";
		echo "<br><br>";

		$normal=$_POST["normal"];
		if (!$nombre) {
			echo "<font color=red>ERROR! Falta el tipo de cambio...</font>";
		}
		else {
			$id_dominio=$id_dominio;
			$normal=$normal;
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

	echo "<font color=red>LISTO! Tipo de cambio eliminado...</font>";

	echo $recargador;
}
?>