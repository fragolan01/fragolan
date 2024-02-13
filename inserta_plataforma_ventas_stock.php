<?
    $sql_plataforma_ventas_stock_master_inserta = "INSERT INTO plataforma_ventas_proveedores(id_dominio,id_producto,fecha,stock) ".
    "VALUES ('$id_dominio','$id_producto','$fecha','$stock')";
    $result_plataforma_ventas_stock_master_inserta = mysql_query($sql_plataforma_ventas_stock_master_inserta);
?>