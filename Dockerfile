# Usa la imagen oficial de PHP con Apache
FROM php:8.4-apache

# Instalar dependencias necesarias
RUN apt-get update && apt-get install -y \
    libxml2-dev \
    && docker-php-ext-install soap

# Copia los archivos del servidor al contenedor
COPY . /var/www/html/

# Exponer el puerto 80 para el servidor Apache
EXPOSE 80
