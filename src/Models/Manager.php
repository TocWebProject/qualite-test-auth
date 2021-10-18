<?php
class Manager
{
    // Connexion à la bdd.
    protected function dbConnect()
    {
        try
        {
            $db = new PDO('mysql:host=********;dbname=********;charset=utf8', '***********', 'root');
            return $db;
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }
    }
}