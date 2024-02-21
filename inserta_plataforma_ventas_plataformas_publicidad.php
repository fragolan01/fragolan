<?
$sql_plataforma_ventas_plataformas_publicidad = 
"INSERT INTO plataforma_ventas_plataformas_publicidad
(id_dominio, publicidad)".
"VALUES ('$id_dominio','$publicidad')";
$result_plataforma_ventas_plataformas_publicidad_master_inserta = 
mysql_query($sql_plataforma_ventas_plataformas_publicidad_master_inserta);
?>
