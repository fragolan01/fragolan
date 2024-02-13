<?
$sql_plataforma_ventas_plataformas_master_inserta = "INSERT INTO plataforma_ventas_plataformas(id_dominio,id_plataforma,nombre) "."VALUES ('$id_dominio','$id_plataforma','$nombre')";
$result_plataforma_ventas_plataformas_master_inserta = mysql_query($sql_plataforma_ventas_plataformas_master_inserta);
?>