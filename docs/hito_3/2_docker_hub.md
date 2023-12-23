# Hito 3

#### Contenedor subido a Dockerhub
------------

Para subir el contenedor en el que se ejecutarón las pruebas unitarias, necesitamos etiquetarla con nuestro nombre de usuario e imagen. Para ello ejecutamos el siguiente comando:

```
docker tag scambia-api-web:latest florescobar919/scambia-api-web:latest
```

Ahora subimos la imagen a docker hub con el siguiente comando:
```
docker push florescobar919/scambia-api-web:latest
```

Al ejecutar obtenemos el siguiente resultado:

![](https://raw.githubusercontent.com/florescobar/Scambia-PracticasCC-UGR/main/docs/img/hito3_7.png)

Podemos ver tambien el resultado en nuestro perfil de Dockerhub:

![](https://raw.githubusercontent.com/florescobar/Scambia-PracticasCC-UGR/main/docs/img/hito3_6.png)