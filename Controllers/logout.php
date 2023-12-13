<?php


if(isset($_POST['cookies'])) {
    setcookie('accepted', "", time() -1);
}
require "../Benutzer.php";
Benutzer::Logout();

