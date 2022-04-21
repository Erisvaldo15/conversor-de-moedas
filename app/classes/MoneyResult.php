<?php

namespace app\classes;

use app\classes\api\PriceAwesome;
use app\classes\Money;
use app\interface\MoneyInterface;
use Throwable;

class MoneyResult extends Money implements MoneyInterface {

    public function __construct(private $money) {
        $this->money($money);
    }

    public function moneyConverted($moneyFrom, $moneyTo)
    {
        try {
            $price = ((new PriceAwesome)->price($moneyFrom->CoinFrom(), $moneyTo->coinTo()));
            return number_format($price->{$moneyFrom->CoinFrom().$moneyTo->coinTo()}->bid * $this->money, 2, ",", ".");
        }

        catch(Throwable) {
            echo "<p class='text-danger text-center'> Erro: algo de inesperado aconteceu. </p>";
        }

    }

}