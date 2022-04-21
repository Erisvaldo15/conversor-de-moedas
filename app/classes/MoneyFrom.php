<?php

namespace app\classes;

class MoneyFrom extends Money {

    private $coinFrom;
    
    public function __construct($selectTypeFrom = "") {
        $this->currency_type_from($selectTypeFrom);
    }

    public function CoinFrom() {
        return $this->coinFrom;
    }

    private function currency_type_from($selectTypeFrom) {

        switch($selectTypeFrom) {
            
             case $selectTypeFrom == "euro":
                 $this->coinFrom = "EUR";
             break;
 
             case $selectTypeFrom == "dólar-americano":
                 $this->coinFrom = "USD";
             break;
 
             case $selectTypeFrom == "real":
                 $this->coinFrom = "BRL";
             break;
 
             case $selectTypeFrom == "peso-argentino";
                 $this->coinFrom = "ARS";
             break;
 
             case $selectTypeFrom == "dólar-canadense";
                 $this->coinFrom = "CAD";
             break;
 
             case $selectTypeFrom == "rublo-russo":
                 $this->coinFrom = "RUB";
             break;
 
         }
 
     }
 
}