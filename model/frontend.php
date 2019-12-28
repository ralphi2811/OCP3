<?php

include('../config/database.php');

function dbConnect()  
{    
    
    
    
    try
    {
        $db = new PDO(***METRE A JOUR ICI***);
        
        return $db;
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
}

