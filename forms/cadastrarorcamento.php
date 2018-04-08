<?php
	sleep(3);
	include_once '../config.php';

	if(isset($_POST['cadastrar']) && $_POST['cadastrar'] == 'sim'):

		$incremento = $_POST['incremento'];
		$cliente_id_logado = $_POST['cliente_id_logado'];

	    $novos_campos = array();
	    $campos_post = $_POST['campos'];
	    $respostas = array();
	    foreach ($campos_post as $indice => $valor) {
	    	$novos_campos[$valor['name']] = $valor['value']; 	
		}

		$num_orcamento = 1;
        $pegar_orcamento = $pdo->prepare("SELECT * FROM orcamento ORDER BY  id_orcamento DESC");        
        $pegar_orcamento->execute();	
		$id_orcamento = $pegar_orcamento->fetch(PDO::FETCH_ASSOC);
		$id_orcamento = $id_orcamento['id_orcamento'];
		$num_orcamento += $id_orcamento;        

		$status = 'Aguardando';
		$stmt_orcamento = $pdo->prepare("INSERT INTO orcamento SET id_orcamento = ?, status = ?, rua = ?,
		bairro  = ?, cidade  = ?, estado  = ?, complemento  = ?, cep  = ?, fk_id_cadastro_cliente = ?");
		$array_orcamento = array(
			$num_orcamento,
			$status,
			utf8_encode($novos_campos['rua']),
			utf8_encode($novos_campos['bairro']),
			utf8_encode($novos_campos['cidade']),			
			utf8_encode($novos_campos['estado']),
			utf8_encode($novos_campos['complemento']),
			utf8_encode($novos_campos['cep']),
			$cliente_id_logado
		);		

				
		if( $stmt_orcamento->execute($array_orcamento) ){
			$inc = 1;
			while($inc <= $incremento){
				$stmt_equipamento = $pdo->prepare("INSERT INTO orcamento_enviado_cliente SET 
				fk_id_orcamento = ?, nome_equipamento = ?, periodo_em_dias = ?, quantidade = ?, observacoes = ?");
				$array_equipamento = array(
					$num_orcamento,
					$novos_campos['equipamento'.$inc],
					$novos_campos['periodo'.$inc],
					$novos_campos['quantidade'.$inc],
					$novos_campos['observacoes'.$inc]
				);					
				$stmt_equipamento->execute($array_equipamento);
				$inc++;
			}
			
			$respostas['erro'] = 'nao';
			$respostas['mensagem'] = 'Orçamento enviado com sucesso.';
		}					
		else{			
			$respostas['erro'] = 'sim';
			$respostas['getErro'] = 'Não foi possível enviar seu orçamento';
		}			
     	echo json_encode($respostas);
	endif;
?>