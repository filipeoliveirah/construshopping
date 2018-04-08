<?php
	//sleep(2);
	include_once '../config.php';

	if(isset($_POST['cadastrar']) && $_POST['cadastrar'] == 'sim'):
	    $novos_campos = array();
	    $campos_post = $_POST['campos'];
	    $respostas = array();
	    foreach ($campos_post as $indice => $valor) {
	    	$novos_campos[$valor['name']] = $valor['value']; 	
     	}          
     	if(!strstr($novos_campos['email'], '@')){
     		$respostas['erro'] = 'sim';
     		$respostas['getErro'] = 'Email inválido';
     	}
     	elseif($novos_campos['senha'] != $novos_campos['csenha']){
     		$respostas['erro'] = 'sim';
     		$respostas['getErro'] = 'As senhas informadas não correspondem';
     	}
     	else{
               $inserir_banco = $pdo->prepare("INSERT INTO cadastrofornecedor SET fk_id_porteempresa = ?, cnpj = ?, 
			   razaosocial = ?, nomefantasia = ?, rua = ?, numero = ?, complemento = ?, cidade = ?, estado = ?, site = ?,
			   telefonecelular = ?, telefonefixo = ?, usuario = ?, email = ?, senha = ?, csenha = ?, tipo_cliente = ?, thumb = ?, construcash = ?");
               $array_sql = array(
				   $novos_campos['porteempresa'], $novos_campos['cnpj'], 
				   	utf8_encode($novos_campos['razaosocial']), utf8_encode($novos_campos['nomefantasia']),
					utf8_encode($novos_campos['rua']), $novos_campos['numero'], utf8_encode($novos_campos['complemento']),
					utf8_encode($novos_campos['cidade']), utf8_encode($novos_campos['estado']),
                    utf8_encode(trim($novos_campos['site'])),
					$novos_campos['telefonecelular'], $novos_campos['telefonefixo'],
					utf8_encode(trim($novos_campos['usuario'])), utf8_encode(trim($novos_campos['email'])),
                    MD5($novos_campos['senha']), MD5($novos_campos['csenha']), 'pessoajuridica', 'empresa_img_placeholder.png', 100.00
               );
               if($inserir_banco->execute($array_sql)){
                    $respostas['erro'] = 'nao';
                    $respostas['mensagem'] = 'Cliente inserido com sucesso';
               	}
               else{
                    $respostas['erro'] = 'sim';
					$respostas['getErro'] = 'Não foi possível inserir seu cadastro, </br>confira todos os dados.';
               	}
     	}
     	echo json_encode($respostas);
	endif;
?>