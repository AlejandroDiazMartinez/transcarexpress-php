# Usar la imagen base de PHP 5.5.9
FROM php:5.6-apache

# Definir el directorio de trabajo
WORKDIR /var/www/html

# Copiar el archivo index.php al directorio de trabajo
COPY index.php .

# Exponer el puerto 80
EXPOSE 80

# Comando para iniciar el servidor PHP
CMD ["apache2-foreground"]