<?
    $sql_plataforma_ventas_stock_master_inserta = "INSERT INTO 
    plataforma_ventas_plataformas_publicidad(id_dominio,publicidad, acoss) ".
    "VALUES ('$id_dominio','$publicidad', '$acoss')";
    $result_plataforma_ventas_stock_master_inserta = 
    mysql_query($sql_plataforma_ventas_stock_master_inserta);
?>