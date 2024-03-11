<?php

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

//Dominio
$id_dominio=9999;

// Archivo .txt
$archivo = 'lista_ids.txt';

// Abrir el archivo en modo lectura
$manejador = fopen($archivo, 'r');

// Fecha
date_default_timezone_set('America/Mexico_city');
$fecha = $fecha = new DateTime();


// Establecer el límite de tiempo a 10 minutos
set_time_limit(600);

// Definir la frecuencia de serie en segundos (2.5 minuto)
$frecuencia_serie = 120;


// Token de autenticación
$token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjM1NmU3OTkwNmJkYjJjYWNhYTJjMWM5MjZmZGNjM2M4ZmEzNzQ4ZGY0Y2VjZWUxOGQzMWFlY2Q3MWViODJmMjFmMWY3ZDBhMGJlZDk1NzkxIn0.eyJhdWQiOiJ5ZmQwS1g4U1REYUtPZEJ0cHB2UG4wSWVFeUdiVW1CVCIsImp0aSI6IjM1NmU3OTkwNmJkYjJjYWNhYTJjMWM5MjZmZGNjM2M4ZmEzNzQ4ZGY0Y2VjZWUxOGQzMWFlY2Q3MWViODJmMjFmMWY3ZDBhMGJlZDk1NzkxIiwiaWF0IjoxNzA2NTUxMzA3LCJuYmYiOjE3MDY1NTEzMDcsImV4cCI6MTczODA4NzMwNiwic3ViIjoiIiwic2NvcGVzIjpbXX0.jhALtrRj_tkgNVj6CZxuEAnWxG6qpUMeOrXZvRbLU7B5prHrc-zPmn4lLcaEDDgfWRTXHEyQrN1nRpO8EQLuBug1kUJm-mwCkPhFMb4U6c7u_S4O0WWB4bNrRv_CQpz1Vdvic1pIJB5PDurPrzG2KbHlzfogdeYWolCKFShqPH5eehoJ0MwJ5AlL83AqpFhqzeprjB0K9eGJMx3a5jc8fYZxQm7jgh1uNk4LfaapuMos23IWczeC_1uQ3Y1XW1yuYaHXY5f9N5RA_IfBULEQ-ya8UL7Bem1ntWRegx1oIQ2M1sGz5hsdyiepI313K61rGa9khk_wI9bmwBwHxca4X_sIMT_sdJ9yOVzgXMRFfG-QlvhNWK-4xDldbo52uYwxu094cwTFZijk9NmNQq-WfPNyHEzmBrL7lSmuPVSqokggA0LjvHPnXmYCz30NxonC-zSgVp_SEBcF7rw0qo5oKe7VDj0GmPHeNV9T1n8IfFo7LaALHfyw4KAwivecMh9XY5GC_IYBLWrjAwqystUW2uiVS660t7mDqvfKonFjgjZyVuakVU4MDBXOJEzF9FVahBUc_MqXVvWbiYWDtVCnzj6rwiaXzLplEFnH4ntsCveizJmcQCF-hPRKHKprEJQFfN7E1TK3kWM0Mfei_URjiklr1J0lR6NmsSvF-q165mE";
// Configurar opciones para la solicitud HTTP
$options = array(
    'http' => array(
        'header'  => "Authorization: Bearer $token\r\n",
        'method'  => 'GET'
    )
);
// Crear contexto de flujo
$context = stream_context_create($options);


// Verificar si el archivo se abrió correctamente
if ($manejador) {

    // Inicializar el contador en 1
    $cont = 1;

    // Leer el archivo línea por línea
    while (($linea = fgets($manejador)) !== false) {

        // Dividir la línea en tres partes usando el tabulador como delimitador
        $partes = explode("\t", $linea);
        
        // Verificar si hay tres partes (orden y producto_id)
        if (count($partes) == 3) {
            // Extraer los primeros 5 dígitos de cada número
            $orden = substr($partes[0], 0, 5);
            $producto_id = trim($partes[1]);
            $ìnv_minimo = trim($partes[2]);
            

            // Verificar si la serie coincide con el contador actual
            if ($orden[0] == $cont) {

                // Construye la URL de la API con el producto_id actual
                $api_url = "https://developers.syscom.mx/api/v1/productos/".$producto_id;
                // Realiza la consulta a la API con el token de autenticación
                $response = file_get_contents($api_url, false, stream_context_create($options));
                
                // Verificar si la consulta fue exitosa
                if ($response === FALSE) {
                    // Manejar el error si la consulta falla
                    echo "Error al consultar la API SYSCOM para el producto_id $producto_id<br>";
                } else {
                    // Procesa los datos recibidos
                    $data = json_decode($response, true);

                        // ***PRECIO
                        $array = json_decode($response, true);
                        $precios = $array['precios']; 

                        // ***PRECIO
                        if (is_array($precios) && array_key_exists('precio_descuento', $precios)) {
                            // Guarda el precio_descuento para imprimirlo al final
                            $precio_descuento = $precios['precio_descuento'];
                        } else {
                            echo "No se pudo acceder al precio de descuento.<br>";
                        }
                
                        // Verifica si la decodificación tuvo éxito
                        if ($data === null) {
                        echo "Error al decodificar el JSON para el producto_id $producto_id<br>";
                    } else {
                        // Accede a los datos y muestra la información
                        $producto_id=$data['producto_id'];
                        $stock = ['total_existencia'];
                        $titulo =['titulo'];

                        //Converit a integer las varibales
                        $int_orden = intval($orden);
                        $int_producto_id = intval($data['producto_id']);
                        $int_stock = intval($data['total_existencia']);
                        $int_inv_minimo = intval($ìnv_minimo); 

                        // Valida producto ACTIVO o en PAUSA
                        if($int_stock < $ìnv_minimo){
                            $status = 0;
                            echo 'PAUSA'.'<br>';
                        }else{
                            $status = 1;
                            echo 'ACTIVO'.'<br>';
                        }
                
                    }
                   

                }                
                   

            } else {

                // Si la serie no coincide, avanzar al siguiente contador y esperar
                $cont++;

                // Construye la URL de la API con el producto_id actual
                $api_url = "https://developers.syscom.mx/api/v1/productos/".$producto_id;
                // Realiza la consulta a la API con el token de autenticación
                $response = file_get_contents($api_url, false, stream_context_create($options));
                
                // Verificar si la consulta fue exitosa
                if ($response === FALSE) {
                    // Manejar el error si la consulta falla
                    echo "Error al consultar la API SYSCOM para el producto_id $producto_id<br>";
                } else {
                    // Procesa los datos recibidos
                    $data = json_decode($response, true);

                        // Verifica si la decodificación tuvo éxito
                        if ($data === null) {
                        echo "Error al decodificar el JSON para el producto_id $producto_id<br>";
                    } else {
                        // Accede a los datos y muestra la información
                        $producto_id=$data['producto_id'];
                
                    }

                    echo $data['producto_id']."<br>";                   

                }                

             }
            
            // Reiniciar el contador si llega al 8
            if ($cont > 8) {
                $cont = 1;
            }


            echo $data['producto_id']."<br>";
            echo "PRODUCTO: ".$data['titulo'].'<br>';
            echo "STOCK: ".$data['total_existencia']."<br>";
            echo 'INV. MINI: '.$ìnv_minimo.'<br>';

            // ***PRECIO
            if (isset($precio_descuento)) {
                echo "PRECIO: " . $precio_descuento.'<br>';
                echo $fecha->format('Y-m-d H:i:s');
                echo "<br>";

            }
    
            // Convertir Titulo a texto
            $data_text = $data['titulo'];

            //Converit a integer las varibales
            $int_precio_descuento = intval($precio_descuento);


            // Insertando datos
            $sql = "INSERT INTO plataforma_ventas_temp (id_dominio, id_syscom, orden, fecha, stock, precio, inv_min, status, titulo) 
            VALUES ('$id_dominio', '$int_producto_id', '$int_orden', NOW(), '$int_stock','$int_precio_descuento','$int_inv_minimo', '$status', '$data_text')";


            if ($conn->query($sql) === TRUE) {
                // echo "\Datos insertados correctamente en la tabla.";
            } else {
                echo "Error al insertar datos: " . $conn->error;
            }


        }
    }
    // Cerrar el archivo
    fclose($manejador);
    
    // Cierra la BD
    $conn->close();

} else {
    // Si no se puede abrir el archivo, mostrar un mensaje de error
    echo "Error: No se pudo abrir el archivo.\n";
}

?>