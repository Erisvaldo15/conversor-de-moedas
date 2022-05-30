<?php

namespace app\classes\messages;

session_start();

class Message {

    public static function get(string $key) {

        if(isset($_SESSION['messages'][$key])) {

            $flash = $_SESSION['messages'][$key];
            unset($_SESSION['messages'][$key]);

            return $flash;
        }

    }

    public static function set(string $key, string $message, $alert = "danger") {

        if(!isset($_SESSION['messages'][$key])) {

            $_SESSION['messages'][$key] = [
               "message" => $message,
               "alert" => $alert
            ];

        }

    }

}