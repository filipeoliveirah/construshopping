<?php
header("access-control-allow-origin: https://pagseguro.uol.com.br");
header("Content-Type: text/html; charset=UTF-8",true);
date_default_timezone_set('America/Sao_Paulo');

require_once("PagSeguro.class.php");
$PagSeguro = new PagSeguro();



//EFETUAR PAGAMENTO	
$venda = array("codigo"=>"1",
			   "valor"=>100.00,
			   "descricao"=>"VENDA DE NONONONONONO",
			   "nome"=>"Filipe Matos de Oliveira",
			   "email"=>"filipeoliveirah@gmail.com",
			   "telefone"=>"71992271494", //(XX) XXXX-XXXX
			   "rua"=>"Rua Alberto Torres",
			   "numero"=>"161",
			   "bairro"=>"matatu",
			   "cidade"=>"salvador",
			   "estado"=>"BA", //2 LETRAS MAIÚSCULAS
			   "cep"=>"40255175",//XX.XXX-XXX
			   "codigo_pagseguro"=>"");// CÓDIGO QUE VOCÊ VAI PASSAR PARA IDENTIFICAR A TRANSACTION
			   
$PagSeguro->executeCheckout($venda,"http://construshopping/pedido/".$_GET['codigo']); //É a URL que irá voltar para o site

//----------------------------------------------------------------------------


//RECEBER RETORNO
if( isset($_GET['transaction_id']) ){
	$pagamento = $PagSeguro->getStatusByReference($_GET['codigo']);
	
	$pagamento->codigo_pagseguro = $_GET['transaction_id'];
	if($pagamento->status==3 || $pagamento->status==4){
		//ATUALIZAR DADOS DA VENDA, COMO DATA DO PAGAMENTO E STATUS DO PAGAMENTO
		
	}else{
		//ATUALIZAR NA BASE DE DADOS
	}
}

?>