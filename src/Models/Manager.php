<?php
class Manager
{ 
    // Connexion à la bdd.
    protected function dbConnect()
    {
        // On récupére les infos stocker dans le ficher .env à la racine grace au package phpdotenv 
        $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
        $dotenv->load();
        $dotenv->required(['DB_HOST', 'DB_NAME', 'DB_USER', 'DB_PASS']);
        $DBhost = $_ENV['DB_HOST'];
        $DBname = $_ENV['DB_NAME'];
        $DBuser = $_ENV['DB_USER'];
        $DBpass = $_ENV['DB_PASS'];

        $charset = 'utf8mb4';
        $dsn = "mysql:host=$DBhost;dbname=$DBname;charset=$charset";

        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        try
        {
            $db = new PDO($dsn, $DBuser, $DBpass, $options);
            return $db;
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }
    }
}