<?php

function hashPassword($password)
{
    $salage = 'oCpFstackP3';
    $salted_password = "$password$salage";
    return hash('sha256', $salted_password);
}

function secureString($string) {
    // prevent xss injection
    $secured_string = htmlspecialchars($string);
    return $secured_string;
}

function cleanLogin($string) {
    // prevent xss injection
    $clean = secureString($string);
    
    // remove spaces at start & end of string
    
}