pipeline {
    agent any

    stages {
        stage('Build') {
            steps {
                echo 'Building..'
            }
        }
        stage('Test') {
            steps {
                echo 'Testing..'
            }
        }
        stage('Sonarqube') {
            // tools {
            //     jdk "jdk8" 
            // }
            environment {
                scannerHome = tool 'qualite-tests-auth'
            }
            steps {
                withSonarQubeEnv(installationName: 'qualite-tests-auth', credentialsId: 'SonarQubeToken') {
                    sh "${scannerHome}/bin/sonar-scanner"
                }
                timeout(time: 10, unit: 'MINUTES') {
                    waitForQualityGate abortPipeline: true
                }
            }
        }
        stage('Deploy') {
            steps {
                echo 'Deploying....'
            }
        }
    }
}