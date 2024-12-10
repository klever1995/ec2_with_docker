# Usa la imagen oficial de PHP con Apache
FROM php:8.0-apache

# Copia el código de tu aplicación al contenedor
COPY . /var/www/html/

# Activa el módulo de reescritura de Apache
RUN a2enmod rewrite

# Expone el puerto 80 para acceder a la aplicación
EXPOSE 80

