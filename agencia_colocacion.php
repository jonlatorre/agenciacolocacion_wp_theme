<?php

include('agencia_colocacion_conf.php');

$header=['Content-type: text/html; charset=UTF-8', 'APIKey: '.$AGENCIA_APIKEY, 'SecretKey: '.$AGENCIA_APISECRET];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.synectiacolocacion.com/ofertas");
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Omitimos la validación del certificado
$curl_response = curl_exec($ch);

// Comprobar si ocurrió un error

if(curl_errno($ch) || $ch===false)
{
    $info = curl_getinfo($ch);  
    echo "HTTP Status: " . $info['http_code'] . "<br/>";
    curl_close($ch);
    die("Ha ocurrido un error en la llamada");
}

curl_close($ch);

$ofertas = json_decode($curl_response, true); // Conversión en array

?>
