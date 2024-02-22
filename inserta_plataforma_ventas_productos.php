<?
    $sql_plataforma_ventas_productos_master_inserta = "INSERT INTO plataforma_ventas_productos(id_dominio, producto, modelo, num_piezas, inventario_minimo, precio_venta, descuento, comision_plataforma) "."VALUES
    ('$id_dominio','$producto', '$modelo', '$num_piezas', '$inventario_minimo', '$precio_venta', '$descuento', '$comision_plataforma')";
    $result_plataforma_ventas_productos_master_inserta = mysql_query($sql_plataforma_ventas_productos_master_inserta);


?>


