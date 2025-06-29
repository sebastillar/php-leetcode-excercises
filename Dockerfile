FROM php:8.2-apache

# Habilitar mod_rewrite si usás Apache
RUN a2enmod rewrite

# Configuración opcional
COPY ./src /var/www/html
