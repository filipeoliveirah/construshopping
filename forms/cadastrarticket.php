<?php
	sleep(2);
    include_once("../config.php");
    $conn = new Conecta();
        
    if(isset($_POST['cadastrar']) && $_POST['cadastrar'] == 'sim'):
        
        $idUsuario = $_POST['idUsuario'];
        $email = $_POST['email'];
        $status = $_POST['status'];
        
        $novos_campos = array();
	    $campos_post = $_POST['campos'];
	    $respostas = array();
	    foreach ($campos_post as $indice => $valor) {
	    	$novos_campos[$valor['name']] = $valor['value']; 	
     	}       
        
        if( $conn->criarTicket($idUsuario, $novos_campos['mensagem'], $novos_campos['assunto']) == true){
            $respostas['erro'] = 'nao';
            $respostas['mensagem'] = 'Ticket enviado com sucesso';
        }
        else{
            $respostas['erro'] = 'sim';
            $respostas['getErro'] = 'Não foi possível enviar seu ticket.';
        } //FIM INSERÇÃO        
     	echo json_encode($respostas);
	endif;
?>