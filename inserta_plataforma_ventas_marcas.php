<?
$sql_plataforma_ventas_marcas_master_inserta = "INSERT INTO plataforma_ventas_marcas(id_dominio,marca) "."VALUES ('$id_dominio', '$marca')";
$result_plataforma_ventas_marcas_master_inserta = mysql_query($sql_plataforma_ventas_marcas_master_inserta);
?>