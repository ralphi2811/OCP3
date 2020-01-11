<?php
// chargement des classes
require_once 'model/ActeurManager.php';
require_once 'model/UserManager.php';

require_once 'control.php';

function loginUser(){
    require 'view/frontend/loginView.php';
}

function createUser() {
    require 'view/frontend/createAccountView.php';
}

function lostPassword() {
    require 'view/frontend/resetPasswordView.php';
}

function addUser($surname, $name, $username, $password, $question, $anwser) {
    
    if (userExist($username) === false) {
        
        $userManager = new \Sixkreation\Ocp3\Model\UserManager();
        $affectedLines = $userManager->userCreate(secureString($surname), secureString($name), secureString($username), hashPassword($password), $question, secureString($anwser));

        if ($affectedLines === false) {
            throw new Exception('Creation Impossible contactez l\'administrateur');
        }
        else {
            // login
            login($username, hashPassword($password));
        }
    }
    else {
        throw new Exception('Utilisateur déja existant');
    }
}

function logout() {
    session_destroy();
    require 'view/frontend/loginView.php';
}

function userExist($username) {
    $userManager = new \Sixkreation\Ocp3\Model\UserManager();
    $result = $userManager->userExist($username);
    
    $resultINT = intval($result['counter']);
    
    if ($resultINT > 0) {
        return true;
    }
    else {
        return false;
    }   
}

function login($username, $password) {
    $userManager = new \Sixkreation\Ocp3\Model\UserManager();
    $result = $userManager->userLogin($username, $password);
    
    if (intval($result['id_user'] > 0)) {
        // save all in $_SESSION
        $_SESSION['userId'] = $result['id_user'];
        $_SESSION['name'] = $result['nom'];
        $_SESSION['surname'] = $result['prenom'];
        // redirect
        require 'view/frontend/acteurView.php';
    }
    else {
        throw new Exception('Utilisateur ou mot de passe invalide');
    }
    
}