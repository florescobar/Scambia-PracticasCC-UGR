

# Hito 0
#### Configuración de Git y GitHub



##### Pre Requisitos para la creación del repositorio.
- Creación de cuenta en [GitHub](https://github.com). 
- Descargar e instalar Git. [Link de descarga](https://git-scm.com/download/win).  

Ya con estos pasos previos configuraremos nuestro entorno de trabajo:

##### Creación de par de claves y subida de clave pública a GitHub.
Es recomendable crear llaves SSH (clave publica, clave privada) debido a que nos permiten realizar operaciones entre nuestro repositorio local y nuestro repositorio remoto de forma segura y sin que el ordenador nos este preguntando la contraseña.  Para generar las claves ejecutar el siguiente comando:

`ssh-keygen -t rsa -b 4096 -C "ejemplo@gmail.com`

Reemplaza el correo que está dentro de las comillas con el correo electrónico que usas para autenticarte en GitHub.

Una vez ejecutado el comando te solicitara donde desees agregar las claves (en mi caso elegi la opción predeterminada) y tambien un passphrase para hacer mas segura la clave. Como resultado obtendremos lo siguiente.

![](https://raw.githubusercontent.com/florescobar/Scambia-PracticasCC-UGR/main/docs/img/Img020652.png)

Nos indica que la llave publica(archivo .pub) y privada (no se debe compartir con nada) han sido creadas en la carpeta que muestra la imagen anterior. Ahora tenemos que añadir la clave publica a nuestra cuenta. Nos dirigimos al siguiente link  [Settings>SSH and GPG keys>new SSH Key](https://github.com/settings/ssh/new). Seguidamente completamos los campos que nos solicita el formulario, sobre todo la llave pública.

![](https://raw.githubusercontent.com/florescobar/Scambia-PracticasCC-UGR/main/docs/img/Img023631.png)

Y asi es como nos conectaremos de forma segura desde Git a GitHub con llaves SSH.

##### Configuración correcta del nombre y correo electrónico.

Cuando empecemos a hacer cambios es importante configurar el nombre de usuario y correo electronico ya que este estara asociado a los futuros commits que hagamos. Para configurar el nombre de usuario ejecutaremos el siguiente comando.
`$ git config --global user.name "ejemplo"`

De igual forma con el correo electronico.
`git config --global user.email "ejemplo@gmail.com"`

No olvides reemplazar los datos de ejemplo.

##### Edición del perfil de GitHub.
Completar nuestro perfil de GitHub es recomendable debido a que nos ayuda a identificarnos en la plataforma, podemos actualizar nuestra foto de perfil y poner una descripción para tener mayor alcance y conectar con otros usuarios con los cuales tengan alguna afinidad, puedes compartir proyectos en los que has trabajado y los hard skills que manejas.

Puedes visualizar el resultado de mi perfil desde [aquí](https://github.com/settings/ssh/new).

##### Activar segundo factor de autenticación

La autenticacion de dos factores es una capa adicional de seguridad por lo tanto es recomendable configurarlo para ello nos dirijimos a  [Settings>Password and authentication](https://github.com/settings/two_factor_authentication/setup/intro). En mi caso agregare la autenticación con mensaje de texto. Para ello agrego mi número telefonico e ingreso el codigo que se me ha enviado el celular.
![](https://raw.githubusercontent.com/florescobar/Scambia-PracticasCC-UGR/main/docs/img/Img033858.png)

Y, asi ya tenemos configurado el doble factor de autenticacion.

![](https://raw.githubusercontent.com/florescobar/Scambia-PracticasCC-UGR/main/docs/img/Img033556.png)

##### Creación del Repositorio

Para la creación del repositorio seguiremos estos pasos:
- Hacer Fork [Repositorio de prácticas](https://github.com/cvillalonga/CC-23-24) desde nuestra cuenta de GitHub. Para ver el repositorio creado haga click [aquí](https://github.com/florescobar/CC-23-24).
- Ejecutar el comando `$ git clone https://github.com/florescobar/CC-23-24` para descargar el repositorio a nuestro entorno local.