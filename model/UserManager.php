<?php

class UserManager
{
    public function userCreate($surname, $name, $username, $password, $question, $anwser) {
        $db = $this->dbConnect();  
        
    }
    
    public function userLogin($username, $password) {
        $db = $this->dbConnect();
    }
    
    private function dbConnect() {
        require 'config/database.php';
        $db = dbconnect();
        
        return $db;
    }
    
}

