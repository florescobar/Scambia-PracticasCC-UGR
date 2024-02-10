
# Hito 6

#### Justificación de la estructura del clúster.
------------

Como en todos los hitos se habia mencionado, nuestro proyecto estara compuesto por un Api's Restful con conexion a una base de datos MySQL. La idea inicial era agregar el front tambíen pero por cuestiones de tiempo no se pudo integrar al proyecto. Por lo tanto tendremos un patrón de Microservicios el cual desplegaremos en contenedores. El servicio de API (Aplicación) y la BD de datos:

![](https://raw.githubusercontent.com/florescobar/Scambia-PracticasCC-UGR/main/docs/img/hito6_1.png).

#### Justificación de la configuración de cada uno de los contenedores que lo componen
------------

El contenedor estará compuesto por 2 servicios:

1. Servicio web: Se construirá la imagen a partir de php.8.2 usando el archivo Dockerfile. Este redigirara el puerto 8070 de la maquina del host al puerto 80 del contenedor. 
2. Servicio Database: Usa la imagen de MYSQL con la versión 8.0. Ahí mismo se definen las credenciales de acceso asi como la BD al cual se va a conectar los servicios.


![](https://raw.githubusercontent.com/florescobar/Scambia-PracticasCC-UGR/main/docs/img/hito6_2.png).
