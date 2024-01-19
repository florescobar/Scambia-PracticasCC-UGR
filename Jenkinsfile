pipeline {
    agent any
    environment {
        // Definir variables de entorno si es necesario
        APP_ENV = 'production'
    }

    stages {

        stage('Ejecutar Pruebas') {
            steps {
                // Ejecutar pruebas PHPUnit utilizando el ejecutable 'make' definido en el PATH
                bat 'cd scambia-api && make test'
            }
        }
    }
}
