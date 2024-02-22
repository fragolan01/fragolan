<?
$sql_plataforma_ventas_envios_master_inserta = 
"INSERT INTO plataforma_ventas_envios(id_dominio,envio,costo,moneda) ".
"VALUES ('$id_dominio','$envio','$costo',$moneda)";
$result_plataforma_ventas_envios_master_inserta = mysql_query($sql_plataforma_ventas_envios_master_inserta);
?>