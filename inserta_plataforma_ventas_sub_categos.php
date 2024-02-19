<?
    $sql_plataforma_ventas_sub_categos_master_inserta = "INSERT INTO 
    plataforma_ventas_sub_categos(id_dominio,sub_catego) ".
    "VALUES ('$id_dominio','$sub_catego')";
    $result_plataforma_ventas_sub_categos_master_inserta = 
    mysql_query($sql_plataforma_ventas_sub_categos_master_inserta);
?>