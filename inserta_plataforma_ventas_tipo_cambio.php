<?
    $sql_plataforma_ventas_tipo_cambio_master_inserta = "INSERT INTO plataforma_ventas_tipo_cambio(id_dominio,normal) ".
    "VALUES ('$id_dominio','$normal')";
    $result_plataforma_ventas_tipo_cambio_master_inserta = mysql_query($sql_plataforma_ventas_tipo_cambio_master_inserta);
?>