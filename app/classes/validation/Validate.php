<?php

namespace app\classes\validation;

use app\classes\messages\Message;
use app\classes\Money;

class Validate {

    public static function validate($money, array $coins): string {

        $coinsSelected = (new Money)->selectCoins($coins);
        
        $coinsVerified = [];
       
        if(empty($money) || !filter_var($money, FILTER_SANITIZE_NUMBER_FLOAT)) {
            Message::set("validation", "Valor inválido.");
            return redirect("?page=home");
        }
    
        for($i = 0; $i < count($coinsSelected); $i++) {

            if($i === 1) {

                if($coinsSelected[$i-1] == $coinsSelected[$i]) {
                    Message::set("validation", "Selecione duas moedas diferentes.");
                    return redirect("?page=home");
                }
              
            }

            $coinsVerified[] = $coinsSelected[$i]; // é necessário ter o "[]" logo depois da variável.
        }

        return implode("-", $coinsVerified);
    }

    // Dá para pegar os valores da moeda aqui em vez de ser no result
}