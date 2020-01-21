<?php
// chargement des classes
require_once 'model/ActeurManager.php';
require_once 'model/UserManager.php';
require_once 'model/CommentManager.php';
require_once 'model/VoteManager.php';

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
        $affectedLines = $userManager->userCreate(secureUserInput($surname), secureUserInput($name), secureUserInput($username), hashPassword($password), $question, secureString($anwser));

        if ($affectedLines === false) {
            throw new Exception('Creation Impossible contactez l\'administrateur');
        }
        else {
            // login
            login($username, $password);
        }
    }
    else {
        // old version 
        // throw new Exception('Utilisateur déja existant');
        
        // new version
        $_SESSION['message'] = "Utilisateur dejà existant";
        require 'view/frontend/createAccountView.php';
    }
}

function logout() {
    // VOIR unset()
    $_SESSION = array();
    header('Location: index.php');
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
    $result = $userManager->userLogin($username, hashPassword($password));
    
    if (intval($result['id_user'] > 0)) {
        // save all in $_SESSION
        $_SESSION['userId'] = $result['id_user'];
        $_SESSION['name'] = $result['nom'];
        $_SESSION['surname'] = $result['prenom'];
        
        // Welcome message
        $_SESSION['message'] = 'Bienvenue ' . $result['prenom'];
        // redirect
        header('Location: index.php?action=actors');
    }
    else {
        /* Old method (redirect to error page)
        throw new Exception('Utilisateur ou mot de passe invalide'); 
         */
        
        // New method : Snackbar / Toast Message (on all pages)
        $_SESSION['message'] = "Login ou Mot de passe incorrect";
        header('Location: index.php');
    }
    
}

function checkAnswer($username, $question, $answer) {
    $userManager = new \Sixkreation\Ocp3\Model\UserManager();
    $result = $userManager->userLostPassword(secureUserInput($username), $question, secureString($answer));
    
    if (intval($result['id_user'] > 0)) {
        $_SESSION['tempId'] = $result['id_user'];
        require 'view/frontend/newPasswordView.php';
    }
    
    else {
        $_SESSION['message'] = "Question ou réponsse incorrecte";
        header('Location: index.php?action=lostpassword');
    }
}

function updatePassword($userId, $password) {
    if (passwordLength($password) === false) {
        throw new Exception('Longueur du mot de passe invalide');
    }
    else {
        $userManager = new \Sixkreation\Ocp3\Model\UserManager();
        $affectedLines = $userManager->userUpdatePassword($userId, hashPassword($password));
    
        if ($affectedLines === false) {
            throw new Exception('Modification Impossible contactez l\'administrateur');
        }
        else {
            $_SESSION['message'] = "Mot de passe changé";
            header('Location: index.php');               
        }
    }

    
}

function listActors() {
    $actorManager = new \Sixkreation\Ocp3\Model\ActeurManager();
    $actors = $actorManager->getActors();
    
    require 'view/frontend/actorsView.php';
    
}

function actor($id_acteur) {
    $actorManager = new \Sixkreation\Ocp3\Model\ActeurManager();
    $commentManager = new \Sixkreation\Ocp3\Model\CommentManager();
    $voteManager = new \Sixkreation\Ocp3\Model\VoteManager();
    
    $actor = $actorManager->getActor($id_acteur);
    $comments = $commentManager->getComments($id_acteur);
    $likes = $voteManager->countVotePositif($id_acteur);
    $disLikes = $voteManager->countVoteNegatif($id_acteur);
    $counterComments = $commentManager->countComments($id_acteur);
    
    if ($actor['id_acteur'] < 1) {
        throw new Exception('Aucun acteur avec cet id');
    }
    else {
        require 'view/frontend/actorView.php'; // page acteur
    }
    
}

function addComment($user_id, $id_acteur , $comment) {
    $commentManager = new \Sixkreation\Ocp3\Model\CommentManager();
    
    $result = $commentManager->postComment($user_id, $id_acteur, htmlspecialchars($comment));
    
    if ($result === false) {
        throw new Exception('Impossible d\'ajouter le commentaire');
    }
    else {
        $_SESSION['message'] = "Merci pour votre commentaire";
        header('Location: index.php?action=actor&id=' . $id_acteur);
    }
        
}

function addVote($id_actor, $id_user, $vote) {
    $voteManager = new \Sixkreation\Ocp3\Model\VoteManager();
    
    // check if vote exist
    $voteExist = $voteManager->existVote($id_actor, $id_user);
    if ($voteExist['exist'] > 0) {
        // Vote already exist -> Update
    }
    else {
        // Add new vote
    }
    
}