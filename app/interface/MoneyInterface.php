<?php

namespace app\interface;

use app\classes\MoneyFrom;
use app\classes\MoneyTo;

interface MoneyInterface {

    public function moneyConverted(MoneyFrom $moneyFrom, MoneyTo $moneyTo);
} 