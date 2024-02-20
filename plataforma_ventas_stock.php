<?

$id_dominio=9999;

if (!$v7) {
    $v7="despliega";
}

if ($v7=="despliega") {
    echo "<br><br>";
    echo "<b><a href='index.php?v7=actualizar'>AGREGAR &raquo;</a></b>";
    echo "<br><br>";
    echo "<b>CONSULTA STOCK:</b>";
    echo "<br><br>";

    $query_plataforma_ventas_stock = "SELECT * FROM plataforma_ventas_stock WHERE id_dominio='".$id_dominio."' ORDER BY stock";
    $result_plataforma_ventas_stock = mysql_query($query_plataforma_ventas_stock) or die('Query failed: plataforma_ventas_stock '. mysql_error());
    while ($line_plataforma_ventas_stock = mysql_fetch_assoc($result_plataforma_ventas_stock)) {
        $data_plataforma_ventas_stock0=$line_plataforma_ventas_stock["id"];
        $data_plataforma_ventas_stock3=$line_plataforma_ventas_stock["stock"];

        echo "<nobr>".
        $data_plataforma_ventas_stock0.".- (<a href='index.php?v7=actualizar&v13=".
        $data_plataforma_ventas_stock0."'>Actualizar</a> | <a href='index.php?v7=eliminar&v13=".
        $data_plataforma_ventas_stock0."'>Eliminar</a>) Stock: ".
        $data_plataforma_ventas_stock3."</nobr>";
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

        $query_plataforma_ventas_stock = "SELECT id,id_dominio,stock FROM plataforma_ventas_stock WHERE id='".$v13."' AND id_dominio='".$id_dominio."'";
        $result_plataforma_ventas_stock = mysql_query($query_plataforma_ventas_stock) or die('Query failed: plataforma_ventas_stock ' . mysql_error());
        while ($line_plataforma_ventas_stock = mysql_fetch_assoc($result_plataforma_ventas_stock)) {
            $data_plataforma_ventas_stock0=$line_plataforma_ventas_stock["id"];
            $data_plataforma_ventas_stock3=$line_plataforma_ventas_stock["stock"];
            }

        echo "<form name='actualiza_plataforma_ventas_stock' method='post' action='index.php?v7=actualizalo&v13=".$v13."'>";
            echo "<nobr>Stock: <input type='text' name='stock' value='".$data_plataforma_ventas_stock3."' size='50'><input type='submit' name='actualizar' value='ACTUALIZAR &raquo;'></nobr>";
        echo "</form>";
    }
    else {
        echo "<br><br>";
        echo "<b>INSERTAR:</b>";
        echo "<br><br>";

        echo "<form name='inserta_plataforma_ventas_stock' method='post' action='index.php?v7=actualizalo'>";
            echo "<nobr>Stock: <input type='text' name='stock' value='' size='50'><input type='submit' name='insertar' value='INSERTAR &raquo;'></nobr>";
        echo "</form>";
    }
}
if ($v7=="actualizalo") {
    if ($v13) {
        echo "<br><br>";
        echo "<b>UPDATE:</b>";
        echo "<br><br>";

        $stock=$_POST["stock"];
        if (!$stock) {
            echo "<font color=red>ERROR! Falta el Stock...</font>";
        }
        else {
            $sql_plataforma_ventas_stock = "UPDATE plataforma_ventas_stock SET stock='".$stock."' WHERE id='".$v13."' AND id_dominio='".$id_dominio."'";
            $result_plataforma_ventas_stock= mysql_query($sql_plataforma_ventas_stock);

            echo "<font color=blue>PERFECTO! Stock actualizado...</font>";

            echo $recargador;
        }
    }
    else {
        echo "<br><br>";
        echo "<b>INSERT:</b>";
        echo "<br><br>";

        $stock=$_POST["stock"];
        if (!$stock) {
            echo "<font color=red>ERROR! Falta el Stock...</font>";
        }
        else {
            $id_dominio=$id_dominio;
            $stock=$stock;
            require($laraiz."inserta_plataforma_ventas_stock.php");

            echo "<font color=green>PERFECTO! Stock insertado...</font>";

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

    $querydel_plataforma_ventas_stock = "DELETE FROM plataforma_ventas_stock WHERE id='".$v13."' AND id_dominio='".$id_dominio."'";
    $resultdel_plataforma_ventas_stock = mysql_query($querydel_plataforma_ventas_stock);

    echo "<font color=red>LISTO! Stock eliminado...</font>";

    echo $recargador;
}
?>