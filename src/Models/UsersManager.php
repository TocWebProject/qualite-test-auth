<?php
require_once('Manager.php');
class UsersManager extends Manager 
{
    // Check Login
    public function checkLogin($mail, $pwd)
    {
        // Récupération des informations de l'user dans la base de donnée
        $db = $this->dbConnect();
        $query = $db->prepare('SELECT * FROM usersLogin WHERE emailUser = ?');
        $query->execute(array($mail));
        $row=$query->fetch(PDO::FETCH_ASSOC);

        // Si il n'y pas de résultat -> le mail de l'user n'existe pas.
        if (!$row) {
            return false;
        // Si il y a un résultat -> Vérification de la corespondance entre les informations entre la saisie de l'utilisateur et les informations de la base de donnée.
        } else {
            $isPasswordCorrect = password_verify($pwd, $row['pwdUser']);
            if ($isPasswordCorrect) {
                $_SESSION['userid'] = $row['emailUser'];
                return true;
            } else {
            // Si le mdp est incorrect.    
                return false;
            }
        }
    }  
  
}