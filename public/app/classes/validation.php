<?php

include_once "../helper/config.php";
include_once "../classes/money.php";

class Validation {

    public static function validField($money): Money {

        if(empty($money)) {
            message("Preencha o campo com o valor que você deseja converter!");
            exit();
        }

        return new Money($money);
    }

    public static function verifySession(): bool {

        if(empty($_SESSION['convertido'])) {
            header("location: ../../");
            return false;
        }

        return true;
    }

    public static function verifyImg($selectType) {

        if($selectType == "EURO") {
            echo '<img src="../../assets/img/european-flag-4567147.svg" alt="Imagem da Bandeira Europeia"> ';
        }

        if($selectType == "DÓLAR-AMERICANO") {
            echo '<img src="../../assets/img/united-26177.svg" alt="Imagem da Bandeira dos Estados Unidos da América"> ';
        }

    }

}