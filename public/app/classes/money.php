<?php

class Money {

    private $msg;
    private $convertedMoney; 

    public function __construct(private $money) {
        $this->setConvertedMoney($money);
    }

    public function getConvertedMoney($money) {
        return $this->convert($money);
    }

    public function getMessage(): string {
        return "{$this->msg}"; // kkkkkkkkk, nem acredito que eu estava pedindo para retornar uma string e simplesmente estava faltando isso... 
    }
   
    private function setConvertedMoney($money) {

        if(!filter_var($money, FILTER_VALIDATE_FLOAT)) {
            $this->msg = "Isto não é um número válido!";
            return;
        }

        $this->money = $money;
        $_SESSION['convertido'] = $this->money;    
    }

    private function convert($selectType) {

       switch($selectType) {
           
            case $selectType == "EURO":
                $convertedMoney = $this->money * 0.17;
                $this->convertedMoney = "€".number_format($convertedMoney, 1, '.', ',');
            break;

            case $selectType == "DÓLAR-AMERICANO":
                $convertedMoney = $this->money * 0.19;
                $this->convertedMoney = "US$".number_format($convertedMoney, 1,'.', ',');
            break;
        }

       return $this->convertedMoney;

    }

}