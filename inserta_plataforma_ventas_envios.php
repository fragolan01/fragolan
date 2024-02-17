<?
$sql_plataforma_ventas_envios_master_inserta = 
"INSERT INTO plataforma_ventas_envios(id_dominio,envio) ".
"VALUES ('$id_dominio','$envio')";
$result_plataforma_ventas_envios_master_inserta = mysql_query($sql_plataforma_ventas_envios_master_inserta);
?>