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
    $userManager = new \Sixkreation\Ocp3\Model\UserManager();
    $affectedLines = $userManager->userCreate($surname, $name, secureString($username), hashPassword($password), $question, $anwser);
    
    if ($affectedLines === false) {
        throw new Exception('Creation Impossible');
    }
    else {
        // ecriture de session id et redirection
        throw new Exception('Compte créer');
    }
}

function logout() {
    session_destroy();
    require 'view/frontend/loginView.php';
}

function userExist() {
    
}