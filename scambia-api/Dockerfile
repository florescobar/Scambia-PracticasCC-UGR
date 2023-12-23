#Construiremos nuestro contenedor base a partir de la imagen oficial de PHP 8.2 con Apache.
FROM php:8.2-apache

#Definimos el usuario root debido a que necesitaremos permisos de administrador para instalar composer
USER root

# Establecemos el directorio dentro del contenedor en /var/www/html. 
WORKDIR /var/www/html

# Copiamos los archivos de configuración de apacher de la carpeta base en las carpetas del contenedor
COPY ./docker/sources.list /etc/apt/sources.list  
COPY ./docker/000-default.conf  /etc/apache2/sites-available/000-default.conf

# Bibliotecas necesarias para el proyecto
RUN apt update && apt install -y \
        nodejs \
        npm \
        libpng-dev \
        zlib1g-dev \
        libxml2-dev \
        libzip-dev \
        libonig-dev \
        zip \
        curl \
        unzip \
        make \
    && docker-php-ext-configure gd \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install pdo_mysql \
    && docker-php-ext-install mysqli \
    && docker-php-ext-install zip \
    && docker-php-source delete

# Descarga e instalación de composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

#
RUN chown -R www-data:www-data /var/www/html && a2enmod rewrite