<?php

require_once('src/Models/UsersManager.php');

// Affichage de la page accueil. 
function accueil()
{
    require ('src/Views/Front/viewLogin.php');
}

// Affichage de la page LogIn si l'user n'est pas déja connecté. 
function login(){
    if(isset($_SESSION['userid'])){
        require ('src/Views/Back/viewHomeDashboard.php');
    }
    else {
        require ('src/Views/Front/viewLogIn.php');
    }
}

// Vérification des identifiants dans le model avec l'appel de la fonction checkLogin dans le Model.
function getCheckLogin($checkEmailUser, $checkPwdUser)
{
  
    $usersManager = new UsersManager();
    $newLogIn = $usersManager->checkLogin($checkEmailUser, $checkPwdUser);

    // Si le Model renvoie false - Il y a une erreur
    if($newLogIn == false){
        $errors = true;
        require ('src/Views/Front/viewLogIn.php');
    } 
    // Si $newLogin renvoie true. Les identifiants corespondent, l'utilisateur peut avoir accès au dashboard avec le nombre de commentaires signalés. 
    else {
        header('location: ./index.php?action=backoffice');
        exit;
    }
}

// Fonction permettant à l'adiministrateur de se déconnecter et retour à l'accueil. 
function logout()
{
    session_unset();
    session_destroy();
    login();
}

// Affichage de la page 404  
function error(){
    require ('src/Views/Front/404.php');
}