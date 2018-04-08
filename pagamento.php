<?php

include_once('config.php');
$conn = new conecta();

$descPedido = $conn->consultarUltimaVenda();

$idPedido = preg_replace('/[^[:alnum:]-]/','',$_POST["idPedido"]);

$data['token'] = "2C09040562EB435DA708E4425EE6BFC5";
$data['email'] = "jonatasdosanjos@outlook.com";
$data['currency'] = "BRL";
$data['itemId1'] = "1";
$data['itemQuantity1'] = "1";
$data['itemDescription1'] = "Pedido: " . $idPedido = 7321739;
$data['itemAmount1'] = '69.00';
$data['reference'] = $idPedido = 398127397;

$data = http_build_query($data);

//$url = 'https://pagseguro.uol.com.br/v2/checkout';
$url ='https://ws.sandbox.pagseguro.uol.com.br/v2/checkout';

$curl = curl_init();
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
$xml= curl_exec($curl);

if($xml == 'Unauthorized'){
    $return = 'Não Autorizado';
    echo $return;
exit;
}

curl_close($curl);

$xml= simplexml_load_string($xml);

if(count($xml -> error) > 0){
    $return = 'Dados Inválidos '.$xml ->error-> message;
    echo $return;
    exit;
}

echo $xml -> code;

?>