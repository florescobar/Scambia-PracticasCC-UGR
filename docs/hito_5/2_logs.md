
# Hito 5

#### Uso de logs.

------------

Laravel utiliza Monolog para la generación de Logs, esta es una biblioteca de registro flexible y poderosa según la comunidad PHP, Además que es muy sencillo de configurar.

En el archivo [config/logging.php](https://github.com/florescobar/Scambia-PracticasCC-UGR/blob/main/scambia-api/config/logging.php). se definen los canales, tambien podemos configurar para que estos sean enviados a un correo electronico ó a una base de datos. En este caso cofiguraremos para que sean guardados diariamente en una carpeta. 

![](https://raw.githubusercontent.com/florescobar/Scambia-PracticasCC-UGR/main/docs/img/hito5_3.png).

Se ha agregado los siguientes niveles de registro dentro de nuestro API:

- INFO.
- WARNING.
- ERROR.

Los controladores de los API's tienen agregado el codigo en caso de error o para que nos permita ver el log para ver las peticiones realizadas a las API's asi como los datos de la petición.

![](https://raw.githubusercontent.com/florescobar/Scambia-PracticasCC-UGR/main/docs/img/hito5_4.png).