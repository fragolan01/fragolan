<?
$sql_plataforma_ventas_categos_master_inserta = "INSERT INTO plataforma_ventas_categos(id_dominio,id_proveedor,id_marca,nombre) "."VALUES ('$id_dominio','$id_proveedor', '$id_marca', '$nombre')";
$result_plataforma_ventas_categos_master_inserta = mysql_query($sql_plataforma_ventas_categos_master_inserta);
?>