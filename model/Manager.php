<?php

require_once 'config/database.php';

class Manager {
    protected function dbConnect() {
        $db = dbconnect();
        return $db;
    }
}
