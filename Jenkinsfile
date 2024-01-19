pipeline {
    agent any
    environment {
        // Definir variables de entorno si es necesario
        APP_ENV = 'production'
    }

    stages {

        stage('Ejecutar Pruebas') {
            steps {
                // Ejecutar pruebas PHPUnit
                sh 'make test'
            }
        }
    }
}
