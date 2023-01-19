

<?php
    $curl = curl_init();

    curl_setopt_array($curl, [
        CURLOPT_URL => 'viacep.com.br/ws/24240550/json/',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CUSTOMREQUEST => 'GET'
    ]);

    $response = curl_exec($curl);
    curl_close($curl);
    print_r($response);