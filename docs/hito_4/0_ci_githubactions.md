# Hito 4

#### Integración Continua
------------

Hemos optado por Github Actions para implementar integracion continua en el proyecto, el principal motivo es por la facilidad de configuración, más aún que nuestro repositorio esta alojado en GitHub. Además de tener muchos recursos en la web en caso de que surjan dudas. Revisamos herramientas como Jenkis, que es una de las más populares hoy en día, pero al buscar la documentación vimos que se tenían que realizar mas configuraciones, esto debido a las tecnologias que hemos elegido por lo tanto lo hemos descartado.

#### GitHub Actions
------------

Para llevar a cabo la automatización de las pruebas en la aplicación, hemos configurado el workflow Run PHPUnit Tests con la finalidad de que se ejecuten las pruebas cada vez que se cambios a la rama main. El archivo [test_actions.yml](https://github.com/florescobar/Scambia-PracticasCC-UGR/blob/main/.github/workflows/test_actions.yml) se ha definido de la siguiente manera

```
name: Run PHPUnit Tests
on:
  push:
    branches: [ main ]

jobs:
  test:
    runs-on: ubuntu-latest
    permissions:
      contents: read
      packages: write

    steps:
      - name: Checkout code
        uses: actions/checkout@v2

      - name: Set up PHP
        uses: shivammathur/setup-php@v2
        with:
          php-version: '8.2'
          extensions: 'mbstring, zip, intl'

      - name: Install dependencies
        run: cd scambia-api && composer install --no-interaction

      - name: Run PHPUnit Tests
        run: cd scambia-api && make test
```

Se esta ejecutando las pruebas con el gestor de tareas make que vimos en los hitos anteriores.

Una vez desplegado los cambios en la rama main. Vemos que automaticamente se ha ejecutado el action con las pruebas completadas.

![](https://raw.githubusercontent.com/florescobar/Scambia-PracticasCC-UGR/main/docs/img/hito4_1.png).

De igual forma, en el hito anterior se ha configurado el workflow para el contenedor y se ha verificado que este se adapta a los cambios realizados.

![](https://raw.githubusercontent.com/florescobar/Scambia-PracticasCC-UGR/main/docs/img/hito4_2.png).
