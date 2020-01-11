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
    
    public function userExist($username) {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT COUNT(username) AS counter FROM `account`  WHERE username=?');
        $req->execute(array($username));
        $countUser = $req->fetch();
        return $countUser;
    }
    
    public function userLogin($username, $password) {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT `id_user`,`nom`,`prenom`,`username`,`question`,`reponse`  FROM `account` WHERE username=? && password=?');
        $req->execute(array($username,$password));
        $userArray = $req->fetch();
        return $userArray;
    }
        
}

