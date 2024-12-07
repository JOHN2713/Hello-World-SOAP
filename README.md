# 🚀 Chat SOAP Cliente-Servidor con PHP y Docker

Este proyecto implementa una aplicación de **Chat Cliente-Servidor** utilizando el protocolo **SOAP** con PHP. La arquitectura está dockerizada utilizando **Docker** y **Docker Compose**, permitiendo una fácil implementación y ejecución.

## ✅ Características

- Implementación de un servidor SOAP que recibe y responde mensajes
- Cliente SOAP para enviar mensajes al servidor
- Interfaz web (HTML + JavaScript) para visualizar los mensajes en tiempo real
- Dockerización completa del servidor y cliente SOAP
- Uso de **Apache** como servidor web
- Configuración de Docker Compose para simplificar el despliegue

## 💻 Requisitos

Asegúrate de tener instaladas las siguientes herramientas:
- **Docker**: [Descargar Docker](https://www.docker.com/get-started)
- **Docker Compose**: [Instalar Docker Compose](https://docs.docker.com/compose/install/)
- **PHP** >= 8.0 (opcional si no usas Docker)

## 🚀 Ejecución del proyecto

Sigue los pasos para ejecutar el proyecto localmente:

1. **Clona el repositorio**:
   ```bash
   git clone https://github.com/tu_usuario/chat-soap.git
   cd chat-soap
   ```

2. **Construye y levanta los contenedores**:
   ```bash
   docker-compose up -d --build
   ```

3. **Accede a la aplicación web**:
   Abre tu navegador y dirígete a: `http://localhost:8080`

4. **Prueba el servidor SOAP**:
   El servidor está disponible en: `http://localhost:8080/server.php`

## 📁 Estructura del proyecto

```
chat-soap/
│
├── docker-compose.yml    # Configuración de Docker Compose
├── Dockerfile            # Dockerfile para el servidor PHP
├── server.php            # Archivo del servidor SOAP
├── client.php            # Cliente SOAP para enviar mensajes
├── index.php             # Interfaz web HTML/JavaScript
└── README.md             # Documentación del proyecto
```

## 🧪 Pruebas del chat

1. Inicia la aplicación web desde el navegador
2. Escribe un mensaje en la interfaz de **index.php**
3. Envía el mensaje y visualiza la respuesta del servidor SOAP

## 🛠️ Tecnologías utilizadas

- **PHP**: Lenguaje de programación para el servidor y cliente SOAP
- **SOAP**: Protocolo de comunicación
- **Apache**: Servidor web
- **Docker**: Contenerización de la aplicación
- **Docker Compose**: Orquestación de contenedores
- **HTML/CSS/JavaScript**: Interfaz de usuario simple

## 📌 Configuración Adicional

### Requisitos de desarrollo

Si deseas desarrollar o modificar el proyecto, necesitarás:
- PHP 8.0 o superior
- Extensión SOAP de PHP
- Servidor web compatible (Apache o Nginx)

### Configuración de Docker Compose

El archivo `docker-compose.yml` contiene la configuración para levantar los servicios. Puedes personalizarlo según tus necesidades específicas.

## 🔧 Solución de problemas

- Asegúrate de tener los puertos 8080 libres
- Verifica que Docker y Docker Compose estén correctamente instalados
- Revisa los logs de Docker si encuentras algún problema:
  ```bash
  docker-compose logs
  ```

