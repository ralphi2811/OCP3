<?php

namespace Sixkreation\Ocp3\Model;

require_once 'model/Manager.php';

class UserManager extends Manager
{
    public function userCreate($surname, $name, $username, $password, $question, $anwser) {
        $db = $this->dbConnect();  
        $newuser = $db->prepare('INSERT INTO `account`(`nom`, `prenom`, `username`, `password`, `question`, `reponse`) VALUES (?,?,?,?,?,?)');
        $affectedlines = $newuser->execute(array($surname, $name, $username, $password, $question, $anwser));
        return $affectedlines;
    }
    
    public function userLogin($username, $password) {
        $db = $this->dbConnect();
    }
        
}

