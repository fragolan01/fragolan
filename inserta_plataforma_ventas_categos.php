<?
    $sql_plataforma_ventas_categos_master_inserta = "INSERT INTO 
    plataforma_ventas_categos(id_dominio,categoria) ".
    "VALUES ('$id_dominio','$categoria')";
    $result_plataforma_ventas_categos_master_inserta = 
    mysql_query($sql_plataforma_ventas_categos_master_inserta);

?>