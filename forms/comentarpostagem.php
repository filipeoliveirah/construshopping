<?php
	
	include_once '../config.php';
	
	if(isset($_POST['cadastrar']) && $_POST['cadastrar'] == 'sim'):
		$novos_campos = array();
		$campos_post = $_POST['campos'];
		$respostas = array();
		foreach ($campos_post as $indice => $valor) {
			$novos_campos[$valor['name']] = $valor['value']; 	
		}
		$usuarioIsCliente = $novos_campos['usuarioIsCliente'];
		if( isset($_SESSION['usuarioIsCliente']) && $usuarioIsCliente == 'pessoafisica'){			      
					
			$inserir_comentario = $pdo->prepare("INSERT INTO comentario_feito_cliente
			SET fk_id_cadastro_cliente = ?, fk_id_tb_postagens = ?, comentario = ?");
			
			$array_inserir_comentario = array(
				$novos_campos['idCliente'],
				$novos_campos['idPostagem'],
				utf8_encode($novos_campos['comentario'])
			);
			$inserir_comentario->execute($array_inserir_comentario);
			
            $respostas['erro'] = 'nao';
            $respostas['mensagem'] = 'Obrigado pelo seu comentário';


		}elseif( isset($_SESSION['usuarioIsCliente']) && $usuarioIsCliente == 'pessoafisica'){			
			$inserir_comentario = $pdo->prepare("INSERT INTO comentario_feito_fornecedor
			SET fk_id_cadastro_fornecedor = ?, fk_id_tb_postagens = ?, comentario = ?");
			
			$array_inserir_comentario = array(
				$novos_campos['idCliente'],
				$novos_campos['idPostagem'],
				utf8_encode($novos_campos['comentario'])
			);
			$inserir_comentario->execute($array_inserir_comentario);
			
            $respostas['erro'] = 'nao';
            $respostas['mensagem'] = 'Obrigado pelo seu comentário';
		}
		else{			
            $respostas['erro'] = 'sim';
            $respostas['getErro'] = 'Não foi possível enviar seu comentário. Faça login e tente novamente.';
		}
	 echo json_encode($respostas);
	endif;
?>