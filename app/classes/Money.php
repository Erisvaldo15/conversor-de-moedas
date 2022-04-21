<?php

namespace app\classes;

abstract class Money {

    private $coins = ['euro', 'dólar-americano', 'real', 'peso-argentino', 'dólar-canadense', 'rublo-russo'];

    public function coins() {
        return $this->coins;
    }

    protected function money($money) {

        if(!filter_var($money, FILTER_VALIDATE_FLOAT)) {
            message("Valor inválido");
            exit();
        }

        return $money;
    }
 
}