<?php

class UserManager
{
    public function userLogin($username, $password) {
        $db = $this->dbConnect();
        
    }
    
    private function dbConnect() {
        require 'config/database.php';
        $db = dbconnect();
        
        return $db;
    }
    
}

