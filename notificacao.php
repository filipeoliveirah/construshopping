<?php

	$notificationCode = preg_replace('/[^[:alnum:]-]/','',$_POST["notificationCode"]);

	$url = 'https://ws.sandbox.pagseguro.uol.com.br/v3/transactions/notifications/'.$notificationCode.'?'.$data; //<--PRODUCAO
	
	//$data['token'] = "2C09040562EB435DA708E4425EE6BFC5"; //<--PRODUCAO
	$data['token'] = "CEC4855A27314523BC250A414693DA07"; // SANDBOX
	$data['email'] = "jonatasdosanjos@outlook.com";

	$data = http_build_query($data);
	//http_build_query vai contatenar cada posição do array data em uma
	//url com parametros. Ex: http...?token=x?email=y?currency=z 

	$curl = curl_init($url);

	curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
	curl_setopt($curl, CURLOPT_URL, $url);
	$xml = curl_exec($curl);
	curl_close($curl);

	$xml = simplexml_load_string($xml);

	$reference = $xml->reference;
	$status = $xml->status;
	$valor_compra = $xml->grossamount;

	if($reference && $status){
		include_once('config.php');
		$conn = new conecta();

		$rs_pedido = $conn->consultarVenda($reference);

		if($rs_pedido){
			$conn->atualizarVenda($reference, $status);
			$conn->atualizarConstrucash($id_fornecedor, $valor_compra);
		}
	}

?>