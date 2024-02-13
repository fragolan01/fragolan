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

    $query_plataforma_ventas_productos = "SELECT * FROM plataforma_ventas_productos WHERE id_dominio='".$id_dominio."' ORDER BY nombre";
    $result_plataforma_ventas_productos = mysql_query($query_plataforma_ventas_productos) or die('Query failed: plataforma_ventas_productos ' . mysql_error());
    while ($line_plataforma_ventas_productos = mysql_fetch_assoc($result_plataforma_ventas_productos)) {

        $data_plataforma_ventas_productos0=$line_plataforma_ventas_productos["id"];

        // llaves foraneas
        $data_plataforma_ventas_productos3=$line_plataforma_ventas_productos["id_dominio"];
        $data_plataforma_ventas_productos3=$line_plataforma_ventas_productos["id_plataforma"];
        $data_plataforma_ventas_productos3=$line_plataforma_ventas_productos["id_proveedor"];
        $data_plataforma_ventas_productos3=$line_plataforma_ventas_productos["id_marca"];
        $data_plataforma_ventas_productos3=$line_plataforma_ventas_productos["id_catego"];
        $data_plataforma_ventas_productos3=$line_plataforma_ventas_productos["id_sub_catego"];

        $data_plataforma_ventas_productos3=$line_plataforma_ventas_productos["nombre"];
        $data_plataforma_ventas_productos0=$line_plataforma_ventas_productos["modelo"];
        $data_plataforma_ventas_productos0=$line_plataforma_ventas_productos["num_piezas"];
        $data_plataforma_ventas_productos0=$line_plataforma_ventas_productos["inventario_minimo"];
        $data_plataforma_ventas_productos0=$line_plataforma_ventas_productos["precio_venta"];
        $data_plataforma_ventas_productos0=$line_plataforma_ventas_productos["descuento"];
        $data_plataforma_ventas_productos0=$line_plataforma_ventas_productos["comision_plataforma"];
        $data_plataforma_ventas_productos0=$line_plataforma_ventas_productos["fijo_plataforma"];

        // llaves foraneas
        $data_plataforma_ventas_productos0=$line_plataforma_ventas_productos["id_campania"];
        $data_plataforma_ventas_productos0=$line_plataforma_ventas_productos["id_costo_envio"];

        $data_plataforma_ventas_productos0=$line_plataforma_ventas_productos["url_proveedor_1"];
        $data_plataforma_ventas_productos0=$line_plataforma_ventas_productos["url_proveedor_2"];
        $data_plataforma_ventas_productos0=$line_plataforma_ventas_productos["url_proveedor_3"];
        $data_plataforma_ventas_productos0=$line_plataforma_ventas_productos["url_plataforma_1"];
        $data_plataforma_ventas_productos0=$line_plataforma_ventas_productos["url_plataforma_2"];
        $data_plataforma_ventas_productos0=$line_plataforma_ventas_productos["url_plataforma_13"];
        $data_plataforma_ventas_productos0=$line_plataforma_ventas_productos["observaciones"];

        echo "<nobr>".$data_plataforma_ventas_productos0.".- (<a href='index.php?v7=actualizar&v13=".$data_plataforma_ventas_productos0."'>Actualizar</a> | <a href='index.php?v7=eliminar&v13=".$data_plataforma_ventas_productos0."'>Eliminar</a>) Productos: Nombre: ".$data_plataforma_ventas_productos3."</nobr>";
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

        $query_plataforma_ventas_productos = "SELECT id, id_dominio,nombre FROM plataforma_ventas_productos WHERE id='".$v13."' AND id_dominio='".$id_dominio."'";
        $result_plataforma_ventas_productos = mysql_query($query_plataforma_ventas_productos) or die('Query failed: plataforma_ventas_productos ' . mysql_error());
        while ($line_plataforma_ventas_productos = mysql_fetch_assoc($result_plataforma_ventas_productos)) {
            $data_plataforma_ventas_productos0=$line_plataforma_ventas_productos["id"];

        // llaves foraneas
        $data_plataforma_ventas_productos3=$line_plataforma_ventas_productos["id_dominio"];
        $data_plataforma_ventas_productos3=$line_plataforma_ventas_productos["id_plataforma"];
        $data_plataforma_ventas_productos3=$line_plataforma_ventas_productos["id_proveedor"];
        $data_plataforma_ventas_productos3=$line_plataforma_ventas_productos["id_marca"];
        $data_plataforma_ventas_productos3=$line_plataforma_ventas_productos["id_catego"];
        $data_plataforma_ventas_productos3=$line_plataforma_ventas_productos["id_sub_catego"];

        $data_plataforma_ventas_productos3=$line_plataforma_ventas_productos["nombre"];
        $data_plataforma_ventas_productos0=$line_plataforma_ventas_productos["modelo"];
        $data_plataforma_ventas_productos0=$line_plataforma_ventas_productos["num_piezas"];
        $data_plataforma_ventas_productos0=$line_plataforma_ventas_productos["inventario_minimo"];
        $data_plataforma_ventas_productos0=$line_plataforma_ventas_productos["precio_venta"];
        $data_plataforma_ventas_productos0=$line_plataforma_ventas_productos["descuento"];
        $data_plataforma_ventas_productos0=$line_plataforma_ventas_productos["comision_plataforma"];
        $data_plataforma_ventas_productos0=$line_plataforma_ventas_productos["fijo_plataforma"];

        // llaves foraneas
        $data_plataforma_ventas_productos0=$line_plataforma_ventas_productos["id_campania"];
        $data_plataforma_ventas_productos0=$line_plataforma_ventas_productos["id_costo_envio"];

        $data_plataforma_ventas_productos0=$line_plataforma_ventas_productos["url_proveedor_1"];
        $data_plataforma_ventas_productos0=$line_plataforma_ventas_productos["url_proveedor_2"];
        $data_plataforma_ventas_productos0=$line_plataforma_ventas_productos["url_proveedor_3"];
        $data_plataforma_ventas_productos0=$line_plataforma_ventas_productos["url_plataforma_1"];
        $data_plataforma_ventas_productos0=$line_plataforma_ventas_productos["url_plataforma_2"];
        $data_plataforma_ventas_productos0=$line_plataforma_ventas_productos["url_plataforma_13"];
        $data_plataforma_ventas_productos0=$line_plataforma_ventas_productos["observaciones"];
        }

        echo "<form name='actualiza_plataforma_ventas_productos' method='post' action='index.php?v7=actualizalo&v13=".$v13."'>";
            echo "<nobr>Nombre del Producto: <input type='text' name='nombre' value='".$data_plataforma_ventas_productos3."' size='50'><input type='submit' name='actualizar' value='ACTUALIZAR &raquo;'></nobr>";
        echo "</form>";
    }
    else {
        echo "<br><br>";
        echo "<b>INSERTAR:</b>";
        echo "<br><br>";

        echo "<form name='inserta_plataforma_ventas_productos' method='post' action='index.php?v7=actualizalo'>";
            echo "<nobr>Nombre del Producto: <input type='text' name='nombre' value='' size='50'><input type='submit' name='insertar' value='INSERTAR &raquo;'></nobr>";
        echo "</form>";
    }
}
if ($v7=="actualizalo") {
    if ($v13) {
        echo "<br><br>";
        echo "<b>UPDATE:</b>";
        echo "<br><br>";

        $nombre=$_POST["nombre"];
        if (!$nombre) {
            echo "<font color=red>ERROR! Falta el Nombre...</font>";
        }
        else {
            $sql_plataforma_ventas_productos = "UPDATE plataforma_ventas_productos SET nombre='".$nombre."' WHERE id='".$v13."' AND id_dominio='".$id_dominio."'";
            $result_plataforma_ventas_productos= mysql_query($sql_plataforma_ventas_productos);

            echo "<font color=blue>PERFECTO! Provducto actualizado...</font>";

            echo $recargador;
        }
    }
    else {
        echo "<br><br>";
        echo "<b>INSERT:</b>";
        echo "<br><br>";

        $nombre=$_POST["nombre"];
        if (!$nombre) {
            echo "<font color=red>ERROR! Falta el Nombre...</font>";
        }
        else {
            $id_dominio=$id_dominio;
            $nombre=$nombre;
            require($laraiz."inserta_plataforma_ventas_productos.php");

            echo "<font color=green>PERFECTO! Producto insertado...</font>";

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

    $querydel_plataforma_ventas_productos = "DELETE FROM plataforma_ventas_productos WHERE id='".$v13."' AND id_dominio='".$id_dominio."'";
    $resultdel_plataforma_ventas_productos = mysql_query($querydel_plataforma_ventas_productos);

    echo "<font color=red>LISTO! Proveedor eliminado...</font>";

    echo $recargador;
}
?>