<?php

    // URL de la API del proveedor
    $api_url = "https://developers.syscom.mx/api/v1/categorias/206";

    // Token de autenticación
    $token = " eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjM1NmU3OTkwNmJkYjJjYWNhYTJjMWM5MjZmZGNjM2M4ZmEzNzQ4ZGY0Y2VjZWUxOGQzMWFlY2Q3MWViODJmMjFmMWY3ZDBhMGJlZDk1NzkxIn0.eyJhdWQiOiJ5ZmQwS1g4U1REYUtPZEJ0cHB2UG4wSWVFeUdiVW1CVCIsImp0aSI6IjM1NmU3OTkwNmJkYjJjYWNhYTJjMWM5MjZmZGNjM2M4ZmEzNzQ4ZGY0Y2VjZWUxOGQzMWFlY2Q3MWViODJmMjFmMWY3ZDBhMGJlZDk1NzkxIiwiaWF0IjoxNzA2NTUxMzA3LCJuYmYiOjE3MDY1NTEzMDcsImV4cCI6MTczODA4NzMwNiwic3ViIjoiIiwic2NvcGVzIjpbXX0.jhALtrRj_tkgNVj6CZxuEAnWxG6qpUMeOrXZvRbLU7B5prHrc-zPmn4lLcaEDDgfWRTXHEyQrN1nRpO8EQLuBug1kUJm-mwCkPhFMb4U6c7u_S4O0WWB4bNrRv_CQpz1Vdvic1pIJB5PDurPrzG2KbHlzfogdeYWolCKFShqPH5eehoJ0MwJ5AlL83AqpFhqzeprjB0K9eGJMx3a5jc8fYZxQm7jgh1uNk4LfaapuMos23IWczeC_1uQ3Y1XW1yuYaHXY5f9N5RA_IfBULEQ-ya8UL7Bem1ntWRegx1oIQ2M1sGz5hsdyiepI313K61rGa9khk_wI9bmwBwHxca4X_sIMT_sdJ9yOVzgXMRFfG-QlvhNWK-4xDldbo52uYwxu094cwTFZijk9NmNQq-WfPNyHEzmBrL7lSmuPVSqokggA0LjvHPnXmYCz30NxonC-zSgVp_SEBcF7rw0qo5oKe7VDj0GmPHeNV9T1n8IfFo7LaALHfyw4KAwivecMh9XY5GC_IYBLWrjAwqystUW2uiVS660t7mDqvfKonFjgjZyVuakVU4MDBXOJEzF9FVahBUc_MqXVvWbiYWDtVCnzj6rwiaXzLplEFnH4ntsCveizJmcQCF-hPRKHKprEJQFfN7E1TK3kWM0Mfei_URjiklr1J0lR6NmsSvF-q165mE";

    // Configurar opciones para la solicitud HTTP
    $options = array(
        'http' => array(
            'header'  => "Authorization: Bearer $token\r\n",
            'method'  => 'GET'
        )
    );

    // Crear contexto de flujo
    $context = stream_context_create($options);

    // Realizar la consulta a la API con el token de autenticación
    $response = file_get_contents($api_url, false, $context);

    // Verificar si la consulta fue exitosa
    if ($response === FALSE) {
        // Manejar el error si la consulta falla
        $result = array('error' => 'Error al consultar la API SYSCOM');
    } else {
        // Procesar los datos recibidos (en este ejemplo asumimos que la respuesta es en JSON)
        $data = json_decode($response, true);

        // Verificar si la decodificación tuvo éxito
        if ($data === null) {
            die('Error al decodificar el JSON');
        }

        // Acceder a los datos
        echo "id: ".$data['id']."<br> ";
        echo "nombre: ".$data['nombre']."<br>";
        echo "nivel: ".$data['nivel']."<br><br>";

        // Decodificar el JSON en un array asociativo
        $array = json_decode($response, true);

        // Verificar si $array['origen'] no es null
        if ($array && isset($array['origen'])) {
            // Acceder al sub-array 'origen'
            $origen = $array['origen'];

         // Acceder a los elementos del sub-array
            foreach ($origen as $elemento) {
                echo "ID: " . $elemento['id'] . "<br>";
                echo "Nombre: " . $elemento['nombre'] . "<br>";
                echo "Nivel: " . $elemento['nivel'] . "<br><br>";
            }
        } else {
            echo "No se encontró el sub-array 'origen' en el JSON.";
        }   

        // Verificar si $array['subcategorias'] no es null
        if ($array && isset($array['subcategorias'])) {
            // Acceder al sub-array 'origen'
            $subcategorias = $array['subcategorias'];

         // Acceder a los elementos del sub-array
            foreach ($subcategorias as $elemento) {
                echo "ID: " . $elemento['id'] . "<br>";
                echo "Nombre: " . $elemento['nombre'] . "<br>";
                echo "Nivel: " . $elemento['nivel'] . "<br><br>";
            }
        } else {
            echo "No se encontró el sub-array 'subcategorias' en el JSON.";
        }   


    }

?>
