<?php
// server.php
function hola_mundo($mensaje) {
    return "¡Servidor SOAP recibió tu mensaje: $mensaje!";
}

try {
    $server = new SoapServer(null, ['uri' => "http://localhost/soap"]);
    $server->addFunction("hola_mundo");
    $server->handle();
} catch (Exception $e) {
    error_log("SOAP Server Error: " . $e->getMessage());
    echo "Error en el servidor SOAP";
}
?>
