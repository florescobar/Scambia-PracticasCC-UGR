pipeline {
    agent any
    environment {
        // Definir variables de entorno si es necesario
        APP_ENV = 'production'
    }

    tools {
        // Definir la herramienta 'make' con la ruta adecuada
        // Puedes configurar esto desde la interfaz de Jenkins en "Configuración de herramientas globales"
        // o mediante un archivo de configuración de Jenkins
        bat 'make = C:\\MinGW\\bin\\make.exe'
    }

    stages {

        stage('Ejecutar Pruebas') {
            steps {
                // Ejecutar pruebas PHPUnit
                bat 'make test'
            }
        }
    }
}
