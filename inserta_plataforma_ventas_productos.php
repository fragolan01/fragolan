<?
    $sql_plataforma_ventas_productos_master_inserta = "INSERT INTO plataforma_ventas_productos(id_dominio, producto, modelo, num_piezas, inventario_minimo, precio_venta, descuento, comision_plataforma, fijo_plataforma, id_campania) "."VALUES
    ('$id_dominio','$producto', '$modelo', '$num_piezas', '$inventario_minimo', '$precio_venta', '$descuento', '$comision_plataforma', '$fijo_plataforma', '$id_campania')";
    $result_plataforma_ventas_productos_master_inserta = mysql_query($sql_plataforma_ventas_productos_master_inserta);


?>


