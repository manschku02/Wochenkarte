<?php
class CookieHelper {

    // COOKIE SETZEN
    public static function setCookie() {
        setcookie('accepted', true, time() + 86400*30, "/"); // 30 Tage gültig!
    }

    public static function deleteCookie() {
        setcookie('accepted', "", time() -1); //Cookie löschen
    }

    public static function cookieCheck() {
        if(isset($_COOKIE['accepted']) && $_COOKIE['accepted'] == true) {
            require '../Controllers/login.php';
        } else if(isset($_COOKIE['email']) && isset($_COOKIE['password'])){
            require '../Controllers/karte.php';
        } else {
            require_once 'Controllers/index.php';
        }
    }
}