<?php
session_start();

require 'controller/frontend.php';

try {
    if (isset($_SESSION['userId'])) {
        if ($_SESSION['userId'] > 0) {
            // utilisateur identifié acces a la la page description
        }
    }
 else {
    // affichege page login
     
    }
    
} catch (Exception $ex) {
    
}


?>


