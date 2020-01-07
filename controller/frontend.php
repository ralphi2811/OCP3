<?php
// chargement des classes


function loginUser(){
    require 'view/frontend/loginView.php';
}

function createUser() {
    require 'view/frontend/createAccountView.php';
}

function lostPassword() {
    require 'view/frontend/resetPasswordView.php';
}