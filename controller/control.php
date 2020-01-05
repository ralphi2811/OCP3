<?php
function hashPassword($password)
{
    $salage = 'oCpFstackP3';
    $salted_password = "$password$salage";
    return hash('sha256', $salted_password);
}

