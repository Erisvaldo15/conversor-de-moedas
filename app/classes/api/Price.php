<?php

namespace app\classes\api;

class Price {

    const BASE_URL = "https://economia.awesomeapi.com.br/json/last/";

    public function get(string $resource) {
        return $this->set($resource);
    }

    private function set($resource) {
        
        $url = self::BASE_URL.$resource;

        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true, // se deve retornar um valor depois da execução
            CURLOPT_CUSTOMREQUEST => "GET"
        ]);

        $response = curl_exec($curl);
        curl_close($curl);

        return json_decode($response, false);
    }
  
}
