<?php

namespace app\classes;

use Exception; 

class Validation {

    public static function validField($money, $selectTypeFrom, $selectTypeTo) {

        if(empty($money)) {
            message("Preencha o campo com o valor que você deseja converter!");
            exit();
        }

        if($selectTypeFrom == $selectTypeTo) {
            message("Por favor, selecione duas moedas diferentes!");
            exit();
        }

        

    }

    public static function validSession(): bool {

        if(empty($_SESSION['convertido'])) {
            header("location: ?page=home");
            return false;
        }

        return true;
    }

    public static function verifyPage() {

        try {
            require load();
        }

        catch(Exception $e) {
            echo "<p> {$e->getMessage()} </p>";
        }

    }

}