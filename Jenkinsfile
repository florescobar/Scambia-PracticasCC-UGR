pipeline {
    agent any
    environment {
        // Definir variables de entorno si es necesario
        APP_ENV = 'production'
    }

    stages {
        stage('Ejecutar Pruebas') {
            environment {
                // Definir la variable de entorno para el ejecutable make
                PATH = "C:\\MinGW\\bin\\:${env.PATH}"
            }
            steps {
                // Ejecutar pruebas PHPUnit utilizando el ejecutable 'make' definido en el PATH
                bat ' make test'
            }
        }
    }
}