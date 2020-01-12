<?php
session_start();

require 'controller/frontend.php';

try {
        
    if (isset ($_GET['action'])) {
        if ($_GET['action'] === 'register') {
            if(isset($_POST['surname'])) {
                if (!empty($_POST['surname']) && !empty($_POST['name']) && !empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['question']) && !empty($_POST['answer']) ) {
                    addUser($_POST['surname'], $_POST['name'], $_POST['username'], $_POST['password'], $_POST['question'], $_POST['answer']);
                }
                
                else {
                    throw new Exception("Création de l'utilisateur : des champs sont vides. " );
                }
            }
            
            else {
                createUser();
            }
            
            
        }
        elseif ($_GET['action'] === 'lostpassword') {
            lostPassword();
        }
        
        elseif ($_GET['action'] === 'logout' ) {
            logout();
        } 
        elseif ($_GET['action'] === 'login' ) {
            if (isset($_POST['username']) && isset($_POST['password'])) {
                if (!empty($_POST['username']) && !empty($_POST['password'])) {
                    login($_POST['username'], $_POST['password']);
                }
                else {
                    throw new Exception("Login impossible : des champs sont vides. " );
                }
                
            }
        }
        
        elseif ($_GET['action'] === 'actors') {
            if (isset($_SESSION['userId']) && $_SESSION['userId'] != 0 ) {
                // redirection vers page accueil acteurs
                require 'view/frontend/acteurView.php';
            }
            
            else {
                throw new Exception('Vous devez vous connecter pour visualiser cette page');
            }
            
        }
        
        else {
            throw new Exception('Action non autorisée');
        }
    }
    
    else {
    // affichege page login
    loginUser(); 
    }
    
} catch (Exception $ex) {
    $errorMessage = $ex->getMessage();
    require 'view/frontend/errorView.php';
}


?>


