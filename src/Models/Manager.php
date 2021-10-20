<?php
class Manager
{
    // Connexion à la bdd.
    protected function dbConnect()
    {
        try
        {
            $db = new PDO('mysql:host=localhost;dbname=qualitetests;charset=utf8', 'root', 'root');
            return $db;
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }
    }
}