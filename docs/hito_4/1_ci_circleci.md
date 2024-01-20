# Hito 4

#### Circle CI
------------

Como sistema de integración adicional hemos elegido Circle CI. Como primer paso creamos la cuenta en [aquí](https://app.circleci.com/), seguido de ello se tuvo que crear el archivo [config.yml](https://github.com/florescobar/Scambia-PracticasCC-UGR/blob/main/.circleci/config.yml) ya que de esta forma la plataforma Circle CI lo reconoce. Configuramos el archivo de la siguiente manera:

```
version: 2.1

jobs:
  test:
    docker:
      - image: florescobar919/scambia-api-web:latest
    steps:
      - checkout
      - run: cd scambia-api && composer install --no-interaction && make test

workflows:
  test_project:
    jobs:
      - test
```

Al subir los cambios vimos que Circle CI identifico el cambio y se inicio con la ejecución del pipelino, finalizando este con exito.

![](https://raw.githubusercontent.com/florescobar/Scambia-PracticasCC-UGR/main/docs/img/hito4_3.png).

Al ver mas detalle del job podemos ver que las pruebas han sido ejecutas correctamente.

![](https://raw.githubusercontent.com/florescobar/Scambia-PracticasCC-UGR/main/docs/img/hito4_4.png).