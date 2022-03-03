<?php

namespace App\Classes;

class Money {

    private $msg;
    private $convertedMoneyFrom;
    private $convertedMoneyTo; 

    public function __construct(private $money, private $selectTypeFrom, private $selectTypeTo) {
        $this->setConvertedMoney($money);
        $this->currency_type_from($selectTypeFrom);
        $this->currency_type_to($selectTypeTo);
    }

    public function getConvertedMoney() {
        return number_format(($this->money / $this->convertedMoneyTo) * $this->convertedMoneyFrom, 4, '.', ',');
    }

    public function getMessage(): string {
        return "{$this->msg}";
    }
   
    private function setConvertedMoney($money) {

        if(!filter_var($money, FILTER_VALIDATE_FLOAT)) {
            $this->msg = "Isto não é um número válido!";
            return;
        }

        $this->money = $money;
        $_SESSION['convertido'] = $this->money;    
    }

    private function currency_type_from($selectTypeFrom) {

       switch($selectTypeFrom) {
           
            case $selectTypeFrom == "euro":
                $this->convertedMoneyFrom = 5.73;
            break;

            case $selectTypeFrom == "dólar-americano":
                $this->convertedMoneyFrom = 5.13;
            break;

            case $selectTypeFrom == "real":
                $this->convertedMoneyFrom = 1;
            break;

            case $selectTypeFrom == "peso-argentino";
                $this->convertedMoneyFrom = 0.048;
            break;

            case $selectTypeFrom == "dólar-canadense";
                $this->convertedMoneyFrom = 4.06;
            break;

            case $selectTypeFrom == "rublo-russo":
                $this->convertedMoneyFrom = 0.047;
            break;

        }

    }

    private function currency_type_to($selectTypeTo) {

        switch($selectTypeTo) {

            case $selectTypeTo == "euro":
                return $this->convertedMoneyTo = 5.73;
            break;

            case $selectTypeTo == "dólar-americano":
                $this->convertedMoneyTo = 5.13;
            break;

            case $selectTypeTo == "real":
                $this->convertedMoneyTo = 1;
            break;

            case $selectTypeTo == "peso-argentino";
                $this->convertedMoneyTo = 0.048;
            break;

            case $selectTypeTo == "dólar-canadense";
                $this->convertedMoneyTo = 4.06;
            break;

            case $selectTypeTo == "rublo-russo":
                $this->convertedMoneyTo = 0.047;
            break;

        }

    }

}