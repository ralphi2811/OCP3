<?php
session_start();

require 'controller/frontend.php';

try {
    if (isset($_SESSION['userId'])) {
        if ($_SESSION['userId'] > 0) {
            // utilisateur identifié acces a la la page description
        }
    }
    
    elseif (isset ($_GET['action'])) {
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
        else {
            throw new Exception('Action non autorisée');
        }
    }
    
    else {
    // affichege page login
    loginUser(); 
    }
    
} catch (Exception $ex) {
    echo 'Erreur : ' . $ex->getMessage();
}


?>


