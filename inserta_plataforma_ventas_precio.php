<?
    $sql_plataforma_ventas_precio_master_inserta = "INSERT INTO plataforma_ventas_precio(id_dominio,id_producto,fecha,precio) "."VALUES ('$id_dominio','$id_producto','$fecha','$precio')";
    $result_plataforma_ventas_precio_master_inserta = mysql_query($sql_plataforma_ventas_precio_master_inserta);
?>