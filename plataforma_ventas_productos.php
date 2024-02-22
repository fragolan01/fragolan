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




        echo 
            "<nobr>".
                $data_plataforma_ventas_productos0.".- (<a href='index.php?v7=actualizar&v13=".
                $data_plataforma_ventas_productos0."'>Actualizar</a> | <a href='index.php?v7=eliminar&v13=".
                $data_plataforma_ventas_productos0."'>Eliminar</a>) Productos: ".
                $data_plataforma_ventas_productos3." Modelo: ".
                $data_plataforma_ventas_productos4. " Num. piezas:".
                $data_plataforma_ventas_productos5. " Inventario-minimo ".
                $data_plataforma_ventas_productos6.

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

        $query_plataforma_ventas_productos = "SELECT id, id_dominio, producto, modelo, num_piezas, inventario_minimo FROM plataforma_ventas_productos WHERE id='".$v13."' AND id_dominio='".$id_dominio."'";
        $result_plataforma_ventas_productos = mysql_query($query_plataforma_ventas_productos) or die('Query failed: plataforma_ventas_productos ' . mysql_error());
        while ($line_plataforma_ventas_productos = mysql_fetch_assoc($result_plataforma_ventas_productos)) {
            $data_plataforma_ventas_productos0=$line_plataforma_ventas_productos["id"];
            $data_plataforma_ventas_productos3=$line_plataforma_ventas_productos["producto"];
            $data_plataforma_ventas_productos4=$line_plataforma_ventas_productos["modelo"];
            $data_plataforma_ventas_productos5=$line_plataforma_ventas_productos["num_piezas"];
            $data_plataforma_ventas_productos6=$line_plataforma_ventas_productos["inventario_minimo"];



        echo "<form name='actualiza_plataforma_ventas_productos' method='post' action='index.php?v7=actualizalo&v13=".$v13."'>";
                echo "<nobr>

                        Producto: <input type='text' name='producto' value='".$data_plataforma_ventas_productos3."' size='50'>
                        Modelo: <input type='text' name='modelo' value='".$data_plataforma_ventas_productos4."' size='50'>
                        Num_piezas: <input type='text' name='num_piezas' value='".$data_plataforma_ventas_productos5."' size='50'>
                        Inventario-minimo: <input type='text' name='inventario_minimo' value='".$data_plataforma_ventas_productos6."' size='50'>

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


        if (!$producto) {
            echo "<font color=red>ERROR! Falta el producto...</font>";
        }
        else {

            $sql_plataforma_ventas_productos = "UPDATE plataforma_ventas_productos SET producto='".$producto."', modelo='".$modelo."', num_piezas='".$num_piezas."', inventario_minimo='".$inventario_minimo."' WHERE id='".$v13."' AND id_dominio='".$id_dominio."'";
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

        if (!$producto) {
            echo "<font color=red>ERROR! Falta el Producto...</font>";
        }
        else {
            $id_dominio=$id_dominio;
            $producto=$producto;
            $modelo=$_POST["modelo"];
            $num_piezas=$_POST["num_piezas"];
            $inventario_minimo=$_POST["inventario_minimo"];
    
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