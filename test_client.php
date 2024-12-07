<?php
try {
    $client = new SoapClient(null, [
        'location' => "http://localhost/server.php",
        'uri'      => "http://localhost/soap",
        'trace'    => 1
    ]);

    // Enviar un mensaje de prueba
    $response = $client->hola_mundo("Hola desde el cliente");
    echo "Respuesta del servidor: $response";
} catch (SoapFault $e) {
    echo "Error SOAP: " . $e->getMessage();
}
?>
