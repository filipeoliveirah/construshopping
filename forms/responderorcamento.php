<?php
	sleep(2);
    include_once '../config.php';

    $conn = new Conecta();
    $saldoConstrucash = $conn->consultarConstrucash($_SESSION['idCliente']);
    $dadosFornecedor = $conn->dadosFornecedor($_SESSION['idCliente']);
    
    $novoSaldo = $saldoConstrucash['construcash'] - 10;   

	if(isset($_POST['cadastrar']) && $_POST['cadastrar'] == 'sim'):        
        $novos_campos = array();
	    $campos_post = $_POST['campos'];
	    $respostas = array();
	    foreach ($campos_post as $indice => $valor) {
	    	$novos_campos[$valor['name']] = $valor['value']; 	
        }    
               
        if($saldoConstrucash['construcash']>=10){        
            $responder_orcamento = $pdo->prepare("INSERT INTO orcamento_respondido_fornecedor SET
            fk_id_cadastro_fornecedor = ?,
            fk_id_porteempresa = ?,
            fk_id_orcamento = ?,
            frete = ?,
            preco = ?,
            status = ?");
            
            $array_resposta = array(
                $_SESSION['idCliente'],
                $_SESSION['porteEmpresa'],
                $novos_campos['idorc'],
                $novos_campos['frete'],
                $novos_campos['preco'],
                'Enviado'
            );

            if( $responder_orcamento->execute($array_resposta) ){
                $conn->debitarConstrucash( $novoSaldo, $_SESSION['idCliente']);
                $respostas['erro'] = 'nao';
                $respostas['mensagem'] = 'Resposta enviada com sucesso. </br>Você sejá redirecionado para outra página.';                
            }
            else{
                $respostas['erro'] = 'sim';
                $respostas['getErro'] = 'Não foi possível enviar sua resposta.';
            } //FIM INSERÇÃO
        }
        else{
            $respostas['erro'] = 'sim';
            $respostas['getErro'] = 'Saldo Insuficiente! Adquira mais Construcashs para enviar mais orçamentos.';
        }
     	echo json_encode($respostas);
	endif;
?>