<?

$id_dominio=9999;

if (!$v7) {
    $v7="despliega";
}

if ($v7=="despliega") {
    echo "<br><br>";
    echo "<b><a href='index.php?v7=actualizar'>AGREGAR &raquo;</a></b>";
    echo "<br><br>";
    echo "<b>CONSULTA PRODUCTO:</b>";
    echo "<br><br>";

    $query_plataforma_ventas_productos = "SELECT * FROM plataforma_ventas_productos WHERE id_dominio='".$id_dominio."' ORDER BY producto";
    $result_plataforma_ventas_productos = mysql_query($query_plataforma_ventas_productos) or die('Query failed: plataforma_ventas_productos ' . mysql_error());
    while ($line_plataforma_ventas_productos = mysql_fetch_assoc($result_plataforma_ventas_productos)) {

        $data_plataforma_ventas_productos0=$line_plataforma_ventas_productos["id"];
        $data_plataforma_ventas_productos3=$line_plataforma_ventas_productos["producto"];
        $data_plataforma_ventas_productos4=$line_plataforma_ventas_productos["modelo"];
        $data_plataforma_ventas_productos5=$line_plataforma_ventas_productos["num_piezas"];
        $data_plataforma_ventas_productos6=$line_plataforma_ventas_productos["inventario_minimo"];
        $data_plataforma_ventas_productos7=$line_plataforma_ventas_productos["precio_venta"];
        $data_plataforma_ventas_productos8=$line_plataforma_ventas_productos["descuento"];
        $data_plataforma_ventas_productos9=$line_plataforma_ventas_productos["comision_plataforma"];
        $data_plataforma_ventas_productos10=$line_plataforma_ventas_productos["fijo_plataforma"];
        $data_plataforma_ventas_productos11=$line_plataforma_ventas_productos["id_campania"];


        echo 
            "<nobr>".
                $data_plataforma_ventas_productos0.".- (<a href='index.php?v7=actualizar&v13=".
                $data_plataforma_ventas_productos0."'>Actualizar</a> | <a href='index.php?v7=eliminar&v13=".
                $data_plataforma_ventas_productos0."'>Eliminar</a>) Productos: ".
                $data_plataforma_ventas_productos3." Modelo: ".
                $data_plataforma_ventas_productos4. " Num. piezas:".
                $data_plataforma_ventas_productos5. " Inventario-minimo: ".
                $data_plataforma_ventas_productos6. " Precio-venta: ".
                $data_plataforma_ventas_productos7. " Descuento: ".
                $data_plataforma_ventas_productos8. " comision-plataforma: ". 
                $data_plataforma_ventas_productos9. " Fijo-plataforma: ".
                $data_plataforma_ventas_productos10. " ID campania: ".
                $data_plataforma_ventas_productos11.

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

        $query_plataforma_ventas_productos = "SELECT id, id_dominio, producto, modelo, num_piezas, inventario_minimo, precio_venta, descuento, comision_plataforma, fijo_plataforma, id_campania FROM plataforma_ventas_productos WHERE id='".$v13."' AND id_dominio='".$id_dominio."'";
        $result_plataforma_ventas_productos = mysql_query($query_plataforma_ventas_productos) or die('Query failed: plataforma_ventas_productos ' . mysql_error());
        while ($line_plataforma_ventas_productos = mysql_fetch_assoc($result_plataforma_ventas_productos)) {
            $data_plataforma_ventas_productos0=$line_plataforma_ventas_productos["id"];
            $data_plataforma_ventas_productos3=$line_plataforma_ventas_productos["producto"];
            $data_plataforma_ventas_productos4=$line_plataforma_ventas_productos["modelo"];
            $data_plataforma_ventas_productos5=$line_plataforma_ventas_productos["num_piezas"];
            $data_plataforma_ventas_productos6=$line_plataforma_ventas_productos["inventario_minimo"];
            $data_plataforma_ventas_productos7=$line_plataforma_ventas_productos["precio_venta"];
            $data_plataforma_ventas_productos8=$line_plataforma_ventas_productos["descuento"];
            $data_plataforma_ventas_productos9=$line_plataforma_ventas_productos["comision_plataforma"];
            $data_plataforma_ventas_productos10=$line_plataforma_ventas_productos["fijo_plataforma"];
            $data_plataforma_ventas_productos11=$line_plataforma_ventas_productos["id_campania"];


        echo "<form name='actualiza_plataforma_ventas_productos' method='post' action='index.php?v7=actualizalo&v13=".$v13."'>";
                echo "<nobr>

                        Producto: <input type='text' name='producto' value='".$data_plataforma_ventas_productos3."' size='50'>
                        Modelo: <input type='text' name='modelo' value='".$data_plataforma_ventas_productos4."' size='50'>
                        Num_piezas: <input type='text' name='num_piezas' value='".$data_plataforma_ventas_productos5."' size='50'>
                        Inventario-minimo: <input type='text' name='inventario_minimo' value='".$data_plataforma_ventas_productos6."' size='50'>
                        Precio-venta: <input type='text' name='precio_venta' value='".$data_plataforma_ventas_productos7."' size='50'>
                        Descuento: <input type='text' name='descuento' value='".$data_plataforma_ventas_productos8."' size='50'>
                        Comision plataforma: <input type='text' name='comision_plataforma' value='".$data_plataforma_ventas_productos9."' size='50'>
                        Fijo plataforma: <input type='text' name='fijo_plataforma' value='".$data_plataforma_ventas_productos10."' size='50'>
                        ID campania: <input type='text' name='id_campania' value='".$data_plataforma_ventas_productos11."' size='50'>


                        <input type='submit' name='actualizar' value='ACTUALIZAR &raquo;'>
                    </nobr>";
        echo "</form>";
    }

    }
    else {
        echo "<br><br>";
        echo "<b>INSERTAR:</b>";
        echo "<br><br>";

        echo "<form name='inserta_plataforma_ventas_productos' method='post' action='index.php?v7=actualizalo'>";
            echo "<nobr>
                    Producto: <input type='text' name='producto' value='' size='50'>
                    Modelo: <input type='text' name='modelo' value='' size='50'>
                    Num. piezas: <input type='text' name='num_piezas' value='' size='50'>
                    Inventario minimo: <input type='text' name='inventario_minimo' value='' size='50'>
                    Precio venta: <input type='text' name='precio_venta' value='' size='50'>
                    Descuento: <input type='text' name='descuento' value='' size='50'>
                    Comision plataforma: <input type='text' name='comision_plataforma' value='' size='50'>
                    Fijo plataforma: <input type='text' name='fijo_plataforma' value='' size='50'>
                    ID campania: <input type='text' name='id_campania' value='' size='50'>

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

        $producto=$_POST["producto"];
        $modelo=$_POST["modelo"];
        $num_piezas=$_POST["num_piezas"];
        $inventario_minimo=$_POST["inventario_minimo"];
        $precio_venta=$_POST["precio_venta"];
        $descuento=$_POST["descuento"];
        $comision_plataforma=$_POST["comision_plataforma"];
        $fijo_plataforma=$_POST["fijo_plataforma"];
        $id_campania=$_POST["id_campania"];



        if (!$producto) {
            echo "<font color=red>ERROR! Falta el producto...</font>";
        }
        else {

            $sql_plataforma_ventas_productos = "UPDATE plataforma_ventas_productos SET producto='".$producto."', modelo='".$modelo."', num_piezas='".$num_piezas."', inventario_minimo='".$inventario_minimo."', precio_venta='".$precio_venta."', descuento='".$descuento."', comision_plataforma='".$comision_plataforma."', fijo_plataforma='".$fijo_plataforma."', id_campania='".$id_campania."' WHERE id='".$v13."' AND id_dominio='".$id_dominio."'";
            $result_plataforma_ventas_productos= mysql_query($sql_plataforma_ventas_productos);

            echo "<font color=blue>PERFECTO! Producto actualizado...</font>";

            echo $recargador;
        }
    }
    else {
        echo "<br><br>";
        echo "<b>INSERT:</b>";
        echo "<br><br>";

        $producto=$_POST["producto"];
        $modelo=$_POST["modelo"];
        $num_piezas=$_POST["num_piezas"];
        $inventario_minimo=$_POST["inventario_minimo"];
        $precio_venta=$_POST["precio_venta"];
        $descuento=$_POST["descuento"];
        $comision_plataforma=$_POST["comision_plataforma"];
        $fijo_plataforma=$_POST["fijo_plataforma"];
        $id_campania=$_POST["id_campania"];


        if (!$producto) {
            echo "<font color=red>ERROR! Falta el Producto...</font>";
        }
        else {
            $id_dominio=$id_dominio;
            $producto=$producto;
            $modelo=$_POST["modelo"];
            $num_piezas=$_POST["num_piezas"];
            $inventario_minimo=$_POST["inventario_minimo"];
            $precio_venta=$_POST["precio_venta"];
            $descuento=$_POST["descuento"];
            $comision_plataforma=$_POST["comision_plataforma"];
            $fijo_plataforma=$_POST["fijo_plataforma"];
            $id_campania=$_POST["id_campania"];


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

    echo "<font color=red>LISTO! Producto eliminado...</font>";

    echo $recargador;
}
?>