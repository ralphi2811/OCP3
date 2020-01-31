<?php
session_start();

require 'controller/frontend.php';

try {
    // REGISTER        
    if (isset ($_GET['action'])) {
        if ($_GET['action'] === 'register') {
            if(isset($_POST['surname'])) {
                if (!empty($_POST['surname']) && !empty($_POST['name']) && !empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['question']) && !empty($_POST['answer']) ) {
                    if (passwordLength($_POST['password']) === false) {
                       throw new Exception("Longueur mot de passe invalide" );
                    }
                    else {
                       addUser($_POST['surname'], $_POST['name'], $_POST['username'], $_POST['password'], $_POST['question'], $_POST['answer']); 
                        
                    }
                    
                }
                
                else {
                    throw new Exception("Création de l'utilisateur : des champs sont vides. " );
                }
            }
            
            else {
                createUser();
            }
            
            
        }
        // LOST PASSWORD
        elseif ($_GET['action'] === 'lostpassword') {
            if (isset($_POST['username']) && isset($_POST['question']) && isset($_POST['answer'])) {
                // function checkAnswer & redirect to changePassword
                checkAnswer($_POST['username'],$_POST['question'],$_POST['answer']);
            }
            
            elseif (isset ($_POST['password'])) {
                if (!empty($_POST['password']) && !empty($_SESSION['tempId'])) {
                    //call function updatePassword
                    if (passwordLength($_POST['password']) === false) {
                        throw new Exception("Longueur mot de passe invalide" );
                    }
                    else {
                        updatePassword($_SESSION['tempId'], $_POST['password']);
                    }
                    
                }
                else {
                    throw new Exception("Procédure invalide..." );
                }
            }
            
            else {
                // view lost password form
                lostPassword();
            }
        }
        
        // LOGOUT
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
        
        // ROUTE TO ACTORS LIST (IF USER AUTENTIFIED)
        elseif ($_GET['action'] === 'actors') {
            if (isset($_SESSION['userId']) && $_SESSION['userId'] != 0 ) {
                listActors();
            }
            
            // IF AUTENTIFICATION FAILLED -> ERROR
            else {
                throw new Exception('Vous devez vous connecter pour visualiser cette page');
            }
            
        }
        
        // ACTOR ACTIONS
        elseif ($_GET['action'] === 'actor' && isset ($_GET['id'])) {
            if ($_SESSION['userId'] < 1 ) {
                loginUser();
            }
            
            elseif (isset($_GET['comment']) && $_GET['comment'] === 'new') {
                // comment actor
                addComment($_SESSION['userId'], $_GET['id'], $_POST['commentaire']);
            }
            
            elseif(isset ($_GET['vote']) && $_GET['vote'] === 'like') {
                // like actor
                addVote($_GET['id'], $_SESSION['userId'], '1');
            }
            
            elseif (isset ($_GET['vote']) && $_GET['vote'] === 'dislike') {
                // dislike actor
                addVote($_GET['id'], $_SESSION['userId'], '0');
            }
            
            else {
                // just vie actor details
                actor($_GET['id']);
            }
             
        }
        
        // CONTACT ACTIONS
        elseif ($_GET['action'] === 'contact') {
            if ($_SESSION['userId'] < 1 ) {
                loginUser();
            }
            elseif (isset ($_POST['message']) && isset ($_POST['name']) && isset ($_POST['email'])) {
                if (!empty($_POST['message']) && !empty($_POST['name']) && !empty($_POST['email'])) {
                    // SEND MAIL FUNCTION
                    newMessage($_POST['email'], $_POST['name'], $_POST['message']);
                }
            }
            
            else {
                // ROUTE TO CONTACT FORM
                contact();
            }
        }
        
        // LEGALS ACTIONS
        elseif ($_GET['action'] === 'legal') {
            if ($_SESSION['userId'] < 1 ) {
                loginUser();
            }
            else {
                // ROUTE TO LEGAL VIEW
                legal();  
            }
            
        }
        
        // USER ACCOUNT ACTIONS
        elseif ($_GET['action'] === 'myaccount') {
            if ($_SESSION['userId'] < 1 ) {
                loginUser();
            }
            
            elseif (isset ($_GET['user']) && $_GET['user'] === 'update') {
                if (!empty($_POST['surname']) && !empty($_POST['name']) && !empty($_POST['username']) && !empty($_POST['question']) && !empty($_POST['answer'])) {
                    // USER DATA MODIFICATION
                    updateUserData($_POST['surname'], $_POST['name'], $_POST['username'], $_POST['question'], $_POST['answer']);
                }
                else {
                    $_SESSION['message'] = 'Un champ est vide, Modification impossible';
                    myaccount();
                }
                
            }
            
            elseif (isset ($_GET['password']) && $_GET['password'] === 'new' ) {
                // ROUTE TO NEW PASSWORD FORM
                userChangePassword();
            }
            
            else {
                // ROUTE TO MYACCOUNT
                myaccount();
            }
        }
        
        else {
            throw new Exception('Action non autorisée');
        }
    }
    
    else {
        if (isset($_SESSION['userId']) && $_SESSION['userId'] > 0) {
            header('Location: index.php?action=actors');
        }
        else {
            // affiche page login
            loginUser(); 
        }
    
    }
    
} catch (Exception $ex) {
    $errorMessage = $ex->getMessage();
    require 'view/frontend/errorView.php';
}


?>


