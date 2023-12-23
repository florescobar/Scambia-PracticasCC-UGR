# Hito 2

#### Gestor de tareas
------------

Si bien Laravel tiene a Artisan como su interfaz de linea de comandos y nos ofrece la posibilidad de configurar tareas personalizadas de manera sencilla, en este proyecto usaremos make ya que es generico (no es propio de un lenguaje de programación) por lo tanto podemos usar diferentes entornos, ademas que no tendremos conflictos a la hora de ejecutar tareas en distintas plataformas, pensando tambien que mas adelante podemos configurar las tareas para el despliegue en Docker.

Para configurar make en Windows 

1.  [Descargar](https://sourceforge.net/projects/mingw/files/) e instalar el programa MinimalistGNU (MinGW), ejecutamos el archivo mingw-get-setup.exe.

2. Seleccionar los paquetes necesarios.
![](https://raw.githubusercontent.com/florescobar/Scambia-PracticasCC-UGR/main/docs/img/hito1_1.png)
3. Agregar MinGW al path en las variables de entorno, Agremos al path `C:\MinGW\bin` .
4. Ejecutamos el siguiente comando `mingw-get install mingw32-make` para instalar make.
5. Renombramos mingw32-make.exe a make.exe en la carpeta de instalación
6. Ejecutamos `make -v` para verificar que este correcto.
![](https://raw.githubusercontent.com/florescobar/Scambia-PracticasCC-UGR/main/docs/img/hito1_2.png)

Tomar en consideración la siguiente guia para la instalación. [Guia](https://www.fdi.ucm.es/profesor/luis/fp/devtools/mingw.html)