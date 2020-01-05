<?php

class UserManager
{
    public function userLogin($username, $password) {
        
    }
    
    private function dbConnect() {
        require 'config/database.php';
        $db = dbconnect();
        
        return $db;
    }
    
}

