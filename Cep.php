<?php


class Cep{

    private $curl;

    public static function ConsultarCep(string $cep){

        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => 'viacep.com.br/ws/' .$cep. '/json/',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'GET'
        ]);

        $resp = curl_exec($curl);
        curl_close($curl);
        
        $array = json_decode($resp, true); //retorna um array
        //print_r($array);
        return $array;
    }

    
}

    
