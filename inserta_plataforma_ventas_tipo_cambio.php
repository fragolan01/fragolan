<?
    $sql_plataforma_ventas_tipo_cambio_master_inserta = "INSERT INTO plataforma_ventas_tipo_cambio(id_dominio,fecha,normal,preferencial,un_dia,una_semana) ".
    "VALUES ('$id_dominio','$fecha','$normal','$preferencial','$un_dia','$una_semana')";
    $result_plataforma_ventas_tipo_cambio_master_inserta = mysql_query($sql_plataforma_ventas_tipo_cambio_master_inserta);
?>