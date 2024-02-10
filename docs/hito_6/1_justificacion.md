
# Hito 6

#### Fichero de composición
------------

Se ha definido en el archivo [docker-compose.yml](https://github.com/florescobar/Scambia-PracticasCC-UGR/blob/main/scambia-api/docker-compose.yml) los servicios que componen el contenedor. La estructura es la siguiente.

```
services:
  web:
    build:
      context: .
      dockerfile: Dockerfile
    ports:
      - "8070:80" 
    depends_on:
     - db
    volumes:
      - .:/var/www/html
  db:
    image: mysql:8.0
    environment:
      MYSQL_ROOT_PASSWORD: 
      MYSQL_DATABASE: scambia-db
      MYSQL_ALLOW_EMPTY_PASSWORD: 'yes'

    ports:
      - "3310:3306"

```

Para crear la imagen y ver el contenedor iniciado para realizar las pruebas ejecutaremos el comand.

```
docker-compose up -d
```
Obteniendo la siguiente imagen del contenedor en ejecución .
![](https://raw.githubusercontent.com/florescobar/Scambia-PracticasCC-UGR/main/docs/img/hito6_7.png).


#### Pruebas
------------

Ahora que ya tenemos el contenedor en ejecución. Agregamos las siguientes endpoints para ver si la respuesta es correcta.

![](https://raw.githubusercontent.com/florescobar/Scambia-PracticasCC-UGR/main/docs/img/hito6_3.png).
![](https://raw.githubusercontent.com/florescobar/Scambia-PracticasCC-UGR/main/docs/img/hito6_4.png).
![](https://raw.githubusercontent.com/florescobar/Scambia-PracticasCC-UGR/main/docs/img/hito6_5.png).
![](https://raw.githubusercontent.com/florescobar/Scambia-PracticasCC-UGR/main/docs/img/hito6_6.png).


Dejamos la lista de los demas endpoints en el archivo [cc.yaml]( https://github.com/florescobar/Scambia-PracticasCC-UGR/blob/main/cc.yaml)
