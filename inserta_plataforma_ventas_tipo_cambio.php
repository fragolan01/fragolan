<?
    $sql_plataforma_ventas_tipo_cambio_master_inserta = "INSERT INTO plataforma_ventas_tipo_cambio(id_dominio,fecha,normal,preferencial,un_dia,una_semana,dos_semanas,tres_semanas) ".
    "VALUES ('$id_dominio','$fecha','$normal','$preferencial','$un_dia','$una_semana','$dos_semanas','$tres_semanas')";
    $result_plataforma_ventas_tipo_cambio_master_inserta = mysql_query($sql_plataforma_ventas_tipo_cambio_master_inserta);
?>