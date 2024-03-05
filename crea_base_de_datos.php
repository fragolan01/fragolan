<?php

// Datos de conexión a la base de datos
$servername = "localhost"; // Servidor de base de datos
$username = "fragcom_develop"; // Usuario de MySQL
$password = "S15t3ma5@Fr4g0l4N"; // Contraseña de MySQL
$database = "fragcom_develop"; // base de dato

// Conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $database);

// Verifica la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Consulta para crear una tabla
$sql =  "CREATE TABLE IF NOT EXISTS plataforma_ventas_temp (
    id int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL,
    id_dominio int(11) DEFAULT NULL,
    id_syscom int(11) DEFAULT NULL,
    id_catego int(11) DEFAULT NULL,
    id_sub_catego int(11) DEFAULT NULL,
    orden int(11) DEFAULT NULL,
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    stock int(11) DEFAULT NULL,
    precio decimal(10,2) DEFAULT NULL,
    inv_min int(11) DEFAULT NULL,
    status tinyint(1) DEFAULT NULL)";
  

// Ejecuta la consulta
if ($conn->query($sql) === TRUE) {
    echo "Tabla creada exitosamente";
} else {
    echo "Error al crear la tabla: " . $conn->error;
}

// Cierra la conexión
$conn->close();
?>
