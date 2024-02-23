<?
    $sql_plataforma_ventas_precio_master_inserta = "INSERT INTO 
    plataforma_ventas_precio(id_dominio,precio,fecha) ".
    "VALUES ('$id_dominio','$precio','$fecha')";
    $results_plataforma_ventas_precio_master_inserta = 
    mysql_query($sql_plataforma_ventas_precio_master_inserta);
?>