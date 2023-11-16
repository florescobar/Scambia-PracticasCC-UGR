# Hito 2

#### Framework de pruebas
------------

[PHPUnit](https://phpunit.de/) es un framework de pruebas estandar de la comunidad PHP, muchos desarrolladores estan familiarizados con esta herramienta por que segun las estadisticas ha demostrado ser bastante maduro y confiable para realizar pruebas. Adicional a ello cuenta con documentacion detallada y hay muchos recursos en la web para que podamos usarlo eficientemente. Cabe mencionar que PHPUnit ofrece herramientas para implementar y seguir las practicas TDD.

El principal motivo de usar PHPUnit es por su integracion con Laravel (Framework elegido para el desarrollo del proyecto), por lo tanto la creacion y ejecucion de pruebas seran mas sencillas, ademas de que admite pruebas unitarias como funcionales.

#### Biblioteca de aserciones
------------

Al usar PHPUnit como framework, este ya incluye un conjunto de aserciones que podemos utilizar en la ejecucion de las pruebas, ya que contiene aserciones para difentes tipos de datos, comparaciones, excepciones, arrays, entre otros. Para mas informacion revisar el [link](https://docs.phpunit.de/en/10.0/assertions.html)

#### Gestor de paquetes
------------
Composer es el gestor de dependencias que ofrece Laravel, se podrian utilizar otras herramientas pero destaca por los siguientes motivos.
- Composer es el gestor de dependencias mas popular en PHP, por lo tanto existe una gran cantidad de recursos y documentacion.
- Esta integrado con Packgist que es el repositorio central de paquetes de PHP, en la que los desarrolladores comparten sus librerias.
- Es compatible con Laravel, por lo que la integracion de dependencias sera mas sencilla.
- Es facil de instalar, al menos para Windows.
- El archivo composer.json es muy facil de entender y podemos configurar las versiones para facilitar la actualizacion y evitar conflictos. 
- Esta inspirado en NPM, que es el gestor más popular. 

Para más detalles de composer, click [aquí](https://getcomposer.org/)
