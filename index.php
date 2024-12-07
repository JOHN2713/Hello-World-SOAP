<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOAP Chat</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        textarea { width: 100%; height: 80px; margin-bottom: 10px; }
        button { padding: 10px 20px; cursor: pointer; }
        #messages { margin-top: 20px; border: 1px solid #ccc; padding: 10px; height: 200px; overflow-y: scroll; }
    </style>
</head>
<body>
    <h1>Chat SOAP Cliente-Servidor</h1>
    <textarea id="message" placeholder="Escribe tu mensaje..."></textarea><br>
    <button onclick="sendMessage()">Enviar</button>

    <div id="messages"></div>

    <script>
        async function sendMessage() {
            const message = document.getElementById('message').value;
            const messagesDiv = document.getElementById('messages');

            try {
                const response = await fetch('client.php', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                    body: `mensaje=${encodeURIComponent(message)}`
                });

                const result = await response.json();
                
                // Verificar respuesta del servidor
                if (result.response) {
                    messagesDiv.innerHTML += `<p><strong>Servidor:</strong> ${result.response}</p>`;
                } else if (result.error) {
                    messagesDiv.innerHTML += `<p style="color:red;">Error: ${result.error}</p>`;
                } else {
                    messagesDiv.innerHTML += `<p style="color:red;">Error desconocido.</p>`;
                }

            } catch (e) {
                messagesDiv.innerHTML += `<p style="color:red;">Error en la conexión: ${e.message}</p>`;
            }

            // Limpiar el campo de mensaje
            document.getElementById('message').value = '';
            messagesDiv.scrollTop = messagesDiv.scrollHeight;
        }
    </script>
</body>
</html>
