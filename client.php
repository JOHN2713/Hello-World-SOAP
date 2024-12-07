<?php
// client.php

try {
    // Cambia 'localhost' por el nombre del servicio 'soap-server'
    $client = new SoapClient(null, [
        'location' => "http://soap-server/server.php",  // Usa el nombre del servicio Docker
        'uri'      => "http://localhost/soap"
    ]);

    // Envía un mensaje al servidor
    $response = $client->__soapCall("hola_mundo", ["¡Hola desde el cliente SOAP!"]);
    echo json_encode(['response' => $response]);
} catch (SoapFault $e) {
    echo json_encode(['error' => 'Error SOAP: ' . $e->getMessage()]);
}
?>
