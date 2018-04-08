<?php
	if(isset($_POST['aprovar'])){
				
		$atualizar_orcamento = "UPDATE orcamento_respondido_fornecedor SET `status` = ?
		WHERE `id_orcamento_enviado_fornecedor` = ? AND `fk_id_orcamento` = ? ";

		$resultado_atualizacao = $pdo->prepare($atualizar_orcamento);
		$array_atualizar_orcamento = array(
			'Aprovado',
			$_POST['id_orcamento_enviado_fornecedor'],
			$_GET['idorc']
		);
		$resultado_atualizacao->execute($array_atualizar_orcamento);
		$count = $resultado_atualizacao->rowCount();

		if($count > 0){
			$aprove_orcamento ="UPDATE orcamento SET status = ? 
			WHERE id_orcamento = ?";			
			$restult_aprove = $pdo->prepare($aprove_orcamento);			
			$array_aprove = array('Aprovado', $_GET['idorc']);
			$restult_aprove->execute($array_aprove);
		
			echo '<div class="ok"><p> Orçamento Aprovado!</br> Você será redirecionado </p></div>';
			header("Refresh: 5; url=orcamentosaprovados.php"); 
		}
		else{
			echo '<div class="erros"><p> Não foi possível aprovar este orçamento. </p></div>';
		}
	}
?>