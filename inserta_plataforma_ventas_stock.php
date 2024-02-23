<?
    $sql_plataforma_ventas_stock_master_inserta = "INSERT INTO 
    plataforma_ventas_stock(id_dominio,stock, fecha) ".
    "VALUES ('$id_dominio','$stock', '$fecha')";
    $result_plataforma_ventas_stock_master_inserta = 
    mysql_query($sql_plataforma_ventas_stock_master_inserta);
?>