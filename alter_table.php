<?php
$id_dominio=9999;

if (!$v7) {
    $v7="despliega";
}

if ($v7=="despliega") {

    $servername = "localhost"; // Servidor de base de datos
    $username = "fragcom_develop"; // Usuario de MySQL
    $password = "S15t3ma5@Fr4g0l4N"; // Contraseña de MySQL
    $database = "fragcom_develop"; // base de datos

    // Tabla y columna
    $tabla = 'plataforma_ventas_temp';
    $columna = 'normal';
    
    // Conexión a la base de datos
    $conn = new mysqli($servername, $username, $password, $database);
    
    // Verifica la conexión
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    $sql = 'SHOW TABLES';
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Mostrar los nombres de las tablas
        echo "<h2>Nombres de las tablas en la base de datos:</h2>";
        echo "<ul>";
        while($row = $result->fetch_assoc()) {
            echo "<li>" . $row["Tables_in_" . $database] . "</li>";
        }
        echo "</ul>";
    } else {
        echo "La base de datos no tiene tablas.";
    }    

    // $sql_drop_column = "ALTER TABLE $tabla MODIFY COLUMN $columna DEC(10,2)";
    // $result_drop = $conn->query($sql_drop_column);

    // $sql_add_column = "ALTER TABLE $tabla ADD COLUMN $columna DEC(10,6)";
    // $result_add_column = $conn->query($sql_add_column);
    
}
    

?>

<!DOCTYPE html>
<html>
<head>
    <title>Descripción de la tabla plataforma_ventas_tipo_cambio</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Descripción de la tabla plataforma_ventas_tipo_cambio</h2>

<table>
    <tr>
        <th>Field</th>
        <th>Type</th>
        <th>Null</th>
        <th>Key</th>
        <th>Default</th>
        <th>Extra</th>
    </tr>
    
    <?php

    $tabla = 'plataforma_ventas_temp';
    $sql = 'SHOW TABLES';
    $sql_columns = "describe $tabla";
    $result = $conn->query($sql_columns);

    if ($result->num_rows > 0) {
        // Salida de cada fila
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["Field"] . "</td>";
            echo "<td>" . $row["Type"] . "</td>";
            echo "<td>" . $row["Null"] . "</td>";
            echo "<td>" . $row["Key"] . "</td>";
            echo "<td>" . $row["Default"] . "</td>";
            echo "<td>" . $row["Extra"] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "0 resultados";
    }
    ?>
</table>

<?php
// Cerrar conexión
$conn->close();
?>

</body>
</html>