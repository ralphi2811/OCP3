<?php
// RETURN SALTED PASSWORD
function hashPassword($password) {
    $salage = 'oCpFstackP3';
    $salted_password = "$password$salage";
    return hash('sha256', $salted_password);
}

// RETURN SECURED STRING (PREVENT XSS INJECTION)
function secureString($string) {
    // prevent xss injection
    $secured_string = htmlspecialchars($string);
    return $secured_string;
}

// CHECK IF STRING RESPECT RULES
function secureUserInput($string) {
    // check length of string
    $lenString = strlen($string);
    if ($lenString < 4  OR $lenString > 15) {
        
        throw new Exception("Taille du champ Login, Nom ou Prénom non conforme, création de l'utilisateur impossible");
    }
    // check if string use illegal characters
    elseif (preg_match("#[ \t\n\x0B\f\r\<\>\\\/]#", $string)) {
        throw new Exception("Utilisation de caractères illégaux. Création de l'utilisateur impossible.");
    }
    // if all is good return secure string
    else {
        return secureString($string);
    }
}

// CHECK IF PASSWORD LENGHT IS CORRECT
function passwordLength($password) {
    if (strlen($password) >= 6) {
        return true;
    }
    else {
        return false;
    }
}