<?php

namespace app\classes;

use app\classes\api\Price;
use app\classes\validation\Validate;

class Money {

    public array $coins = ['euro', 'dólar-americano', 'real', 'peso-argentino', 'dólar-canadense', 'rublo-russo'];
    private array $selectedCoins = [];

    public function convert(float|string|null $money, array $coins) {
        
        if($validate = Validate::validate($money, $coins)) {
           $price = ((new Price)->get($validate));
           return number_format($price->{str_replace("-","",$validate)}->bid * $money, 2, ',', '.');
        }

    }

    public function selectCoins(array $select): array {

        for($i = 0; $i < count($select); $i++) {

            switch($select[$i]) {
            
                case $select[$i] == "euro":
                        $this->selectedCoins[] = "EUR";
                break;
    
                case $select[$i] == "dólar-americano":
                    $this->selectedCoins[] = "USD";
                break;
    
                case $select[$i] == "real":
                    $this->selectedCoins[] = "BRL";
                break;
    
                case $select[$i] == "peso-argentino": // olha só... 
                    $this->selectedCoins[] = "ARS";
                break;
    
                case $select[$i] == "dólar-canadense":
                    $this->selectedCoins[] = "CAD";
                break;
    
                case $select[$i] == "rublo-russo":
                    $this->selectedCoins[] = "RUB";
                break;
    
            }

        }

        $_GET['flag'] = $select[1];

        return $this->selectedCoins;
    }

}