<?
$sql_plataforma_ventas_marcas_master_inserta = "INSERT INTO plataforma_ventas_proveedores(id_dominio,nombre) "."VALUES ('$id_dominio', '$nombre')";
$result_plataforma_ventas_marcas_master_inserta = mysql_query($sql_plataforma_ventas_marcas_master_inserta);
?>