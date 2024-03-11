<?php
// Realiza la conexión a la base de datos y demás configuraciones necesarias
$servername = "localhost"; // Servidor de base de dato
$username = "fragcom_develop"; // Usuario de MySQL
$password = "S15t3ma5@Fr4g0l4N"; // Contraseña de MySQL
$database = "fragcom_develop"; // base de datos

// Conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $database);

// Verifica la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Realiza la consulta SQL
// $sql = "SELECT id_syscom, stock, inv_min, status, fecha, orden FROM plataforma_ventas_temp AS t1 WHERE t1.fecha = (SELECT MAX(t2.fecha) FROM plataforma_ventas_temp AS t2 WHERE t1.id_syscom = t2.id_syscom) AND status = 0 ORDER BY orden";
// $sql = "SELECT status, id_syscom, titulo, stock, inv_min, fecha, orden  FROM plataforma_ventas_temp AS t1 WHERE t1.fecha = (SELECT MAX(t2.fecha) FROM plataforma_ventas_temp AS t2 WHERE t1.id_syscom = t2.id_syscom) AND status = 0 ORDER BY orden";

$sql = "SELECT status, id_syscom, titulo, stock, inv_min, fecha, orden  
        FROM plataforma_ventas_temp AS t1 WHERE t1.fecha = 
        (SELECT MAX(t2.fecha) FROM plataforma_ventas_temp AS t2 WHERE t1.id_syscom = t2.id_syscom) 
        ORDER BY orden";


$result = $conn->query($sql);

// Verifica si se encontraron resultados
if ($result->num_rows > 0) {
    // Imprime los resultados en una tabla HTML
    echo "<table border='1'>
    <tr>
    <th>STATUS</th>
    <th>ID SYSCOM</th>
    <th>PRODUCTO</th>
    <th>STOCK</th>
    <th>Inv Min</th>
    <th>Fecha</th>
    <th>Orden</th>
    </tr>";

    echo "<table>";
    echo "<tr><th>Estado</th><th>ID Syscom</th><th>Título</th><th>Stock</th><th>Inventario Mínimo</th><th>Fecha</th><th>Orden</th></tr>";
    

    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        
        // Imprimir el estado
        echo "<td>";
        if ($row['status'] == 1) {
            // echo 'ACTIVO';
            echo "<font color=green> ACTIVO</font>";

        } elseif ($row['status'] == 0) {
            echo "<b><font  color=red> PAUSA</font></b>";

        } else {
            echo 'Desconocido'; // Si el estado no es ni 0 ni 1
        }
        echo "</td>";
    
        // Imprimir los demás datos de la fila
        echo "<td>" . $row['id_syscom'] . "</td>";
        echo "<td>" . $row['titulo'] . "</td>";
        echo "<td>" . $row['stock'] . "</td>";
        echo "<td>" . $row['inv_min'] . "</td>";
        echo "<td>" . $row['fecha'] . "</td>";
        echo "<td>" . $row['orden'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    
} else {
    // Si no se encontraron resultados, muestra un mensaje
    echo "No se encontraron resultados";
}

// Cierra la conexión a la base de datos
$conn->close();
?>
