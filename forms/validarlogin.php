<?php
	//sleep(2);
     include_once '../config.php';

	if(isset($_POST['validar']) && $_POST['validar'] == 'sim'):
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

     	else{
            try{                
                $select = $pdo->prepare("SELECT * FROM cadastrocliente WHERE email = ? AND senha = ?");
                $array_sql = array(
                    $novos_campos['email'],
                    md5($novos_campos['senha'])
                );

                $select->execute($array_sql);
                $contador = $select->rowCount();
                if( $contador == 1 ){
                    $loop = $select->fetchAll();
                    foreach ($loop as $show){
                        $cliente_id_logado = $show['id_cadastro_cliente'];
                        $nomeLogado = $show['nome'];
                        $usuarioLogado = $show['usuario'];                            
                        $usuarioIsCliente = $show['tipo_cliente'];
                    }

                    // SE CONSULTA DER TRUE, CRIAMOS A SESSÃO DE USUÁRIO                    
                    $emailLogado = $novos_campos['email'];
                    session_start();
                    $_SESSION['nome'] = $nomeLogado;
                    $_SESSION['usuario'] = $usuarioLogado;
                    $_SESSION['email'] = $emailLogado;
                    $_SESSION['usuarioIsCliente'] = $usuarioIsCliente;
                    $_SESSION['idCliente'] = $cliente_id_logado;
                    
                    $respostas['erro'] = 'nao';
                    $respostas['mensagem'] = 'Cliente logado com sucesso!';
                }

                else{                    
                    $selecionar_fornecedores = $pdo->prepare("SELECT * FROM cadastrofornecedor WHERE email = ? AND senha = ?");
                    $array_fornecedores = array(
                        $novos_campos['email'],
                        md5($novos_campos['senha'])
                    );  
                    $selecionar_fornecedores->execute($array_fornecedores);
                    $contar_fornecedores = $selecionar_fornecedores->rowCount();

                    if($contar_fornecedores == 1){                        
                        $loop = $selecionar_fornecedores->fetchAll();
                        foreach ($loop as $show){
                            $cliente_id_logado = $show['id_cadastrofornecedor'];
                            $nomeLogado = $show['nome'];
                            $usuarioLogado = $show['usuario'];                            
                            $usuarioIsCliente = $show['tipo_cliente'];
                            $porteEmpresa = $show['fk_id_porteempresa'];
                            $saldoConstrucash = $show['construcash'];
                        }

                        // SE CONSULTA DER TRUE, CRIAMOS A SESSÃO DE USUÁRIO                    
                        $emailLogado = $novos_campos['email'];
                        session_start();
                        $_SESSION['nome'] = $nomeLogado;
                        $_SESSION['usuario'] = $usuarioLogado;
                        $_SESSION['email'] = $emailLogado;
                        $_SESSION['usuarioIsCliente'] = $usuarioIsCliente;
                        $_SESSION['idCliente'] = $cliente_id_logado;
                        $_SESSION['porteEmpresa'] = $porteEmpresa;
                        $_SESSION['saldoConstrucash'] = $saldoConstrucash;

                        $respostas['erro'] = 'nao';
                        $respostas['mensagem'] = 'Cliente logado com sucesso!'; 
                    }                       
                    else{                        
                        $respostas['erro'] = 'sim';
                        $respostas['getErro'] = 'Não foi possível logar.';
                    }                       
                }               
            }
            catch (PDOException $erro){
                echo "Erro: " . $erro->getMessage();
            }
     	}
     	echo json_encode($respostas);
	endif;
?>