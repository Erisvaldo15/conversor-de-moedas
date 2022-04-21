<?php

namespace app\classes\api;

class PriceAwesome {

    public function price(string $coinFrom, string $coinTo) {

        $url = file_get_contents("https://economia.awesomeapi.com.br/last/".$coinFrom."-".$coinTo);
        return json_decode($url);
    
    }
  
}

