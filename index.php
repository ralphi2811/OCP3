<?php
require 'controller/frontend.php';

$password = $_GET['pass'];


echo $password;

echo '<br>';

echo hashPassword($password);

?>


