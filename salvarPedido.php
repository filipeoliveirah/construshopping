<?php

    include_once('config.php');
	    
    $fk_id_construcash = preg_replace('/[^:alnum:]-]/','',$_POST['idConstrucash']);    
    $fk_id_cadastrofornecedor = preg_replace('/[^:alnum:]-]/','',$_POST['id_cadastrofornecedor']);
    $fk_id_status_pedido = 1;  

    $conn = new conecta();
      
    $conn->salvarVenda($fk_id_construcash, $fk_id_cadastrofornecedor, $fk_id_status_pedido);
        
    $idPedido = $conn->consultarUltimaVenda();    
    echo $idPedido["id_venda"];
    
?>