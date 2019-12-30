<?php


function dbconnect()
{
    include '../config/database.php';    
    
    try {
        $bdd = new PDO('\'mysql:host='.$db_host.';dbname='.$db_name.';charset=utf8\'', $db_user, $db_pass);
        return $bdd;
    } catch (Exception $ex) {
        die('Erreur : '.$ex->getMessage());
    }
}