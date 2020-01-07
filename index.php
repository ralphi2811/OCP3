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
            createUser();
        }
        elseif ($_GET['action'] === 'lostpassword') {
            lostPassword();
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


