<?php

namespace App\Classes;

include_once "../helper/config.php";
include_once "../classes/money.php";

class Validation {

    public static function validField($money, $selectTypeFrom, $selectTypeTo): Money {

        if(empty($money)) {
            message("Preencha o campo com o valor que você deseja converter!");
            exit();
        }

        if($selectTypeFrom == $selectTypeTo) {
            message("Por favor, selecione duas moedas diferentes!");
            exit();
        }

        return new Money($money, $selectTypeFrom, $selectTypeTo);
    }

    public static function verifySession(): bool {

        if(empty($_SESSION['convertido'])) {
            header("location: ../../public/");
            return false;
        }

        return true;
    }

}