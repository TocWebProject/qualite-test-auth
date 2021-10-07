<?php

session_start();

require('./src/Controllers/ControllerFront.php');
require('./src/Controllers/ControllerBackOffice.php');

//Si il n'ya pas de $_GET['action'] ou si différent de $_GET['action'] -> Affichage de la page login
if(!isset($_GET['action'])){
    return login();
}

switch ($_GET['action']) {

    // Affichage de la page 404 
    case '404' :
    error();
    break;
    /// ------------------------------- Router LogIn System ------------------------------- /// 
    // Affichage de la page login
    case 'login' :
        login();
        break;
    // LogOut de l'user. 
    case 'logout' :
        logout();
        break;
    // Vérification des identifiants de l'user dans la vue logIn. 
    case 'checkLogIn' :
        if(isset($_POST['submit_logIn'])){

            // Echo et Die en attendant de faire la connexion à la Bdd
            print_r('Form Submited'); die();

            // Si les champs existent et qu'ils ne sont pas vides.
            if(isset($_POST['emailUser'], $_POST['pwdUser']) AND !empty($_POST['emailUser']) AND !empty($_POST['pwdUser'])) {
                // Sécurisation des valeurs transmise par l'utilisateur:
                // Suppression des caractères spéciaux tel que les chevrons > & <, des antislashes et espaces inutiles.
                $checkEmailUser = htmlspecialchars(trim(stripslashes($_POST['emailUser'])));
                $checkPwdUser = htmlspecialchars(trim(stripslashes($_POST['pwdUser'])));
                // Appel de la fonction Vérification LogIn dans le controller Back. 
                getCheckLogin($checkEmailUser, $checkPwdUser);
            }
        }
        else{
            login();
        }
        break;

        /// ------------------------------- Router BACKOFFICE ------------------------------- /// 
        // Affichage du dashboard pour l'user.  
        case 'backoffice' :
            backoffice();
        break;

    default:
    login();
    break;
}