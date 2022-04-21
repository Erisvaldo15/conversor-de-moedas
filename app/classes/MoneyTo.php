<?php

namespace app\classes;

class MoneyTo extends Money {

    private $coinTo;
    
    public function __construct($SelectTypeTo = "") {
       $this->currency_type_to($SelectTypeTo); 
    }

    public function coinTo() {
        return $this->coinTo;
    }
    
    private function currency_type_to($SelectTypeTo) {

        switch($SelectTypeTo) {

            case $SelectTypeTo == "euro":
                $this->coinTo = "EUR";
            break;

            case $SelectTypeTo == "dólar-americano":
                $this->coinTo = "USD";
            break;

            case $SelectTypeTo == "real":
                $this->coinTo = "BRL";
            break;

            case $SelectTypeTo == "peso-argentino";
                $this->coinTo = "ARS";
            break;

            case $SelectTypeTo == "dólar-canadense";
                $this->coinTo = "CAD";
            break;

            case $SelectTypeTo == "rublo-russo":
                $this->coinTo = "RUB";
            break;

        }

    }

}