<?
    $sql_plataforma_ventas_precio_master_inserta = "INSERT INTO 
    plataforma_ventas_precio(id_dominio,precio) ".
    "VALUES ('$id_dominio','$precio')";
    $results_plataforma_ventas_precio_master_inserta = 
    mysql_query($sql_plataforma_ventas_precio_master_inserta);
?>