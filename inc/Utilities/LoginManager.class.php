<?php

class LoginManager{

    private static $login;

    public static function verifyLogin() {
        self::$login->false;

        if(!isset($_SESSION)) {
            session_start();
        }

        if (isset($_SESSION["logged"])){
            self::$login = true;
        } else{
            session_destroy();
            self::$login = false;
            header("Location: Login.php");
    }
    return self::$login;
    }
}