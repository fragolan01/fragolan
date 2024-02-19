<?
$sql_plataforma_ventas_plataformas_master_inserta = 
"INSERT INTO plataforma_ventas_plataformas(id_dominio,plataforma) ".
"VALUES ('$id_dominio','$plataforma')";
$result_plataforma_ventas_plataformas_master_inserta = 
mysql_query($sql_plataforma_ventas_plataformas_master_inserta);
?>