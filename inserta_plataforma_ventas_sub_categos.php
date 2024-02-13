<?
$sql_plataforma_ventas_plataforma_ventas_sub_categos_master_inserta = "INSERT INTO plataforma_ventas_proveedores(id_dominio,nombre,id_proveedor,id_catego,id_sub_catego,nombre) "."VALUES ('$id_dominio','$id_proveedor','$id_catego','$id_sub_catego','$nombre')";
$result_plataforma_ventas_plataforma_ventas_sub_categos_master_inserta = mysql_query($sql_plataforma_ventas_sub_categos_master_inserta);
?>