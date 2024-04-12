<?php
// Realiza la conexión a la base de datos y demás configuraciones necesarias
$servername = "localhost"; // Servidor de base de datos
$username = "fragcom_develop"; // Usuario de MySQL
$password = "S15t3ma5@Fr4g0l4N"; // Contraseña de MySQL
$database = "fragcom_develop"; // base de datos

// Conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $database);

// Verifica la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// $sql = "SELECT id_syscom, precio, fecha  
//         FROM plataforma_ventas_precio AS t1 WHERE t1.fecha = 
//         (SELECT MAX(t2.fecha) FROM plataforma_ventas_precio AS t2 WHERE t1.id_syscom = t2.id_syscom) 
//         ORDER BY fecha";

$sql = "
SELECT fecha, normal FROM plataforma_ventas_tipo_cambio
";

$result = $conn->query($sql);

// Verifica si se encontraron resultados
if ($result->num_rows > 0) {
    // Imprime los resultados en una tabla HTML
    echo "<table border='1'>
    <tr>
    <th>FECHA</th>
    <th>TC</th>
    </tr>";

    echo "<table>";
    echo "<tr><th>FECHA</th><th>TC</th></tr>";
    
    while($row = $result->fetch_assoc()) {
        echo "<tr>";    
        // Imprimir los demás datos de la fila
        echo "<td>" . $row['fecha'] . "</td>";
        echo "<td>" . $row['normal'] . "</td>";
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
