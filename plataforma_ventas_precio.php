<?

$id_dominio=9999;

if (!$v7) {
    $v7="despliega";
}

if ($v7=="despliega") {
    echo "<br><br>";
    echo "<b><a href='index.php?v7=actualizar'>AGREGAR &raquo;</a></b>";
    echo "<br><br>";
    echo "<b>CONSULTA PRECIO:</b>";
    echo "<br><br>";

    $query_plataforma_ventas_precio = "SELECT * FROM plataforma_ventas_precio WHERE id_dominio='".$id_dominio."' ORDER BY precio";
    $result_plataforma_ventas_precio = mysql_query($query_plataforma_ventas_precio) or die('Query failed: plataforma_ventas_precio '. mysql_error());
    while ($line_plataforma_ventas_precio = mysql_fetch_assoc($result_plataforma_ventas_precio)) {
        $data_plataforma_ventas_precio0=$line_plataforma_ventas_precio["id"];
        $data_plataforma_ventas_precio3=$line_plataforma_ventas_precio["precio"];
        $data_plataforma_ventas_precio4=$line_plataforma_ventas_precio["fecha"];


        echo 
            "<nobr>".
                $data_plataforma_ventas_precio0.".- (<a href='index.php?v7=actualizar&v13=".
                $data_plataforma_ventas_precio0."'>Actualizar</a> | <a href='index.php?v7=eliminar&v13=".
                $data_plataforma_ventas_precio0."'>Eliminar</a>) precio: ".
                $data_plataforma_ventas_precio3. " Fecha: ".
                $data_plataforma_ventas_precio4.
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

        $query_plataforma_ventas_precio = "SELECT id,id_dominio,precio,fecha FROM plataforma_ventas_precio WHERE id='".$v13."' AND id_dominio='".$id_dominio."'";
        $result_plataforma_ventas_precio = mysql_query($query_plataforma_ventas_precio) or die('Query failed: plataforma_ventas_precio ' . mysql_error());
        
        while ($line_plataforma_ventas_precio = mysql_fetch_assoc($result_plataforma_ventas_precio)) {
            $data_plataforma_ventas_precio0=$line_plataforma_ventas_precio["id"];
            $data_plataforma_ventas_precio3=$line_plataforma_ventas_precio["precio"];
            $data_plataforma_ventas_precio4=$line_plataforma_ventas_precio["fecha"];

        }

        echo "<form name='actualiza_plataforma_ventas_precio' method='post' action='index.php?v7=actualizalo&v13=".$v13."'>";
            echo "<nobr>
                        Precio: <input type='text' name='precio' value='".$data_plataforma_ventas_precio3."' size='50'>
                        Fecha: <input type='date' name='fecha' value='".$data_plataforma_ventas_precio4."' size='50'>

                        <input type='submit' name='actualizar' value='ACTUALIZAR &raquo;'>
                </nobr>";
        echo "</form>";
    }
    else {
        echo "<br><br>";
        echo "<b>INSERTAR:</b>";
        echo "<br><br>";

        echo "<form name='inserta_plataforma_ventas_precio' method='post' action='index.php?v7=actualizalo'>";
            echo "<nobr>
                    precio: <input type='text' name='precio' value='' size='50'>
                    Fecha: <input type='date' name='fecha' value='' size='50'>

                    <input type='submit' name='insertar' value='INSERTAR &raquo;'></nobr>";
        echo "</form>";
    }
}
if ($v7=="actualizalo") {
    if ($v13) {
        echo "<br><br>";
        echo "<b>UPDATE:</b>";
        echo "<br><br>";

        $precio=$_POST["precio"];
        $fecha=$_POST["fecha"];

        if (!$precio) {
            echo "<font color=red>ERROR! Falta el precio...</font>";
        }
        else {
            $sql_plataforma_ventas_precio = "UPDATE plataforma_ventas_precio SET precio='".$precio."', fecha='".$fecha."' WHERE id='".$v13."' AND id_dominio='".$id_dominio."'";
            $result_plataforma_ventas_precio= mysql_query($sql_plataforma_ventas_precio);

            echo "<font color=blue>PERFECTO! precio actualizado...</font>";

            echo $recargador;
        }
    }
    else {
        echo "<br><br>";
        echo "<b>INSERT:</b>";
        echo "<br><br>";

        $precio=$_POST["precio"];
        $fecha=$_POST["fecha"];

        if (!$precio) {
            echo "<font color=red>ERROR! Falta el precio...</font>";
        }
        else {
            $id_dominio=$id_dominio;
            $precio=$precio;
            $fecha=$fecha;

            require($laraiz."inserta_plataforma_ventas_precio.php");

            echo "<font color=green>PERFECTO! precio insertado...</font>";

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

    echo "<font color=red>LISTO! precio eliminado...</font>";

    echo $recargador;
}
?>