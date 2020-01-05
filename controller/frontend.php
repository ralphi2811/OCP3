<?php
function userSession()
{
    if ($_SESSION['userID'] > 0) {
        echo 'User identifié';
    }
    else {
        echo 'redirection page login';
    }
}

function hashPassword($password)
{
    $salage = 'oCpFstackP3';
    $salted_password = "$password$salage";
    return hash('sha256', $salted_password);
}