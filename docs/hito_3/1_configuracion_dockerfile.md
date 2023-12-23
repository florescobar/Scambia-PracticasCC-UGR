# Hito 3

#### Configuración del archivo Dockerfile
------------

Vamos a crear el archivo Dockerfile en la raiz de la solución del proyecto. Para ello:

Construiremos nuestro contenedor base a partir de la imagen oficial de PHP 8.2 con Apache.

```
FROM php:8.2-apache
```
Definimos el usuario root debido a que necesitaremos permisos de administrador para instalar composer.
```
USER root
```
Establecemos el directorio dentro del contenedor en /var/www/html. 
```
WORKDIR /var/www/html
```
Copiamos los archivos de configuración de apacher de la carpeta base en las carpetas del contenedor
```
COPY ./docker/sources.list /etc/apt/sources.list  
COPY ./docker/000-default.conf  /etc/apache2/sites-available/000-default.conf
```
Descargamos e instalamos las bibliotecas necesarios.
```
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
```
Descarga e instalación de composer.
```
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN chown -R www-data:www-data /var/www/html && a2enmod rewrite

```
#### Creación del archivo docker-compose.yml
------------
Definiremos el entorno de desarrollo de la aplicación web en el archivo docker-compose.yml En el cual definiremos:
1. Servicio web basandonos en el archivo Dockerfile definido previamente.
2. Servicio de base de datos con la imagen de MySQL.
3. Servicio para conectarnos a la BD de datos con la imagen de phpMyAdmin.

#### Ejecución del contenedor de pruebas
------------

Ya hemos configurado los archivos necesarios, ahora empezaremos a construir la imagen y ejecutar el contenedor para iniciar los servicios definidos en el archivo docker-compose.yml , con el comando:
```
docker-compose up -d 
```
Obtenemos el siguiente resultado.

![](https://raw.githubusercontent.com/florescobar/Scambia-PracticasCC-UGR/main/docs/img/hito3_1.png)

Podemos visualizar el contenedor en la aplicación Docker de Widnows.

![](https://raw.githubusercontent.com/florescobar/Scambia-PracticasCC-UGR/main/docs/img/hito3_2.png)

Ahora ejecutaremos las pruebas unitarias y funcionales en el contenedor con el comando con el gestor de tareas que definimos en el anterior hito

```
make test 
```
Obteniendo el siguiente resultado que incluyen las pruebas satisfactorias.

![](https://raw.githubusercontent.com/florescobar/Scambia-PracticasCC-UGR/main/docs/img/hito3_4.png)

![](https://raw.githubusercontent.com/florescobar/Scambia-PracticasCC-UGR/main/docs/img/hito3_5.png)