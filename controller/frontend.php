<?php
// chargement des classes


function loginUser(){
    require 'view/frontend/loginView.php';
}

function createUser() {
    require 'view/frontend/createAccountView.php';
}

function lostpassword() {
    require 'vie/frontend/lostpasswordView.php';
}