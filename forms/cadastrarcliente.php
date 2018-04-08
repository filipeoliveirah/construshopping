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
               $inserir_banco = $pdo->prepare("INSERT INTO cadastrocliente SET nome = ?, sobrenome = ?, usuario = ?, email = ?, senha = ?, csenha = ?, tipo_cliente = ?");
               $array_sql = array(
                    utf8_encode($novos_campos['nome']),
                    utf8_encode($novos_campos['sobrenome']),
                    utf8_encode(trim($novos_campos['usuario'])),
                    $novos_campos['email'],
                    MD5($novos_campos['senha']),
					MD5($novos_campos['csenha']),
					'pessoafisica'
               );
               if($inserir_banco->execute($array_sql)){
                    $respostas['erro'] = 'nao';
                    $respostas['mensagem'] = 'Cliente inserido com sucesso';
               }
               else{
                    $respostas['erro'] = 'sim';
                    $respostas['getErro'] = 'Não foi possível inserir seu cadastro.';
               }
     	}
     	echo json_encode($respostas);
	endif;
?>