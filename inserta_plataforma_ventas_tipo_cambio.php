<?
    $sql_plataforma_ventas_tipo_cambio_master_inserta = "INSERT INTO plataforma_ventas_tipo_cambio(id_dominio,id_producto,
    fecha,normal,preferencial,un_dia,una_semana,dos_semanas,tres_semanas,un_mes) ".
    "VALUES ('$id_dominio','$id_producto','$fecha,'$normal','$preferencial','$un_dia','$una_semana','$dos_semanas','$tres_semanas','$un_mes')";
    $result_plataforma_ventas_tipo_cambio_master_inserta = mysql_query($sql_plataforma_ventas_tipo_cambio_master_inserta);
?>