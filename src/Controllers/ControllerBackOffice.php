<?php

require_once('src/Models/UsersManager.php');

// ------------------------------- Dashboard BackOffice -------------------------------

// Affichage du dashboard pour l'user. 
function backoffice(){
    // Si l'user à ouvert une Session, il a accès au dashboard du backoffice. 
    if(isset($_SESSION['userid'])){
        require ('src/Views/Back/viewHomeBackOffice.php');
    }
    // Si un utilisateur tente d'accéder au backoffice sans être connecté -> retour accueil. 
    else {
        header('location: ./index.php?action=accueil');
        exit;
    }
}