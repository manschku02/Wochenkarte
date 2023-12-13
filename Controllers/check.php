<?php
include '../Benutzer.php';

$success = Benutzer::login($_POST['email'], $_POST['password']);

if($success){
    setcookie('email', $_POST['email'], time() + 86400*30, "/");
    setcookie('password', $_POST['password'], time() + 86400*30, "/");
    require 'karte.php';
} else {
    require '../Views/login.view.php';
}
