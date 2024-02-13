<?
    $sql_plataforma_ventas_productos_master_inserta = "INSERT INTO plataforma_ventas_productos(id_dominio, id_plataforma, id_proveedor, id_marca, id_catego, 
    id_sub_catego, nombre, modelo, num_piezas, precio_venta, descuento, comision_plataforma, fijo_plataforma, id_campania, id_costo_envio, url_proveedor_1,
     url_proveedor_2, url_proveedor_3, url_plataforma_1, url_plataforma_2, url_plataforma_3, observaciones) "."VALUES
    ('$id_dominio','$id_plataforma','$id_proveedor','$id_marca','$id_catego','$id_sub_catego','$nombre','$modelo','$num_piezas','$num_piezas','$precio_venta',
    '$descuento','$comision_plataforma','$fijo_plataforma','$id_campania','$id_costo_envio','$url_proveedor_1','$url_proveedor_2','$url_proveedor_3',
    '$url_plataforma_1','$url_plataforma_2','$url_plataforma_3','$observaciones')";

    $result_plataforma_ventas_productos_master_inserta = mysql_query($sql_plataforma_ventas_productos_master_inserta);


?>


