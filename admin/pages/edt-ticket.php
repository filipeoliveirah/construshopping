<script type="text/javascript">
<!--jQuery(function($){
   $("#date").mask("99/99/9999",{placeholder:"dd/mm/yyyy"});
});-->
</script>
<?php include("functions/limita-texto.php");?>
<div class="main">
  <div class="main-inner">
	    <div class="container">
	     	<div class="row">     	  
		        <div class="span12">	      		
		      		<div id="target-1" class="widget">
		      			<?php
							//RECUPERA OS DADOS
							if(!isset($_GET['id'])){ header("Location: home.php?acao=ver-tickets"); exit;}
							$id = $_GET['id'];
							$select = "SELECT a.id_ticket, a.assunto, a.data_criacao_ticket, c.id_cadastro_cliente, c.nome, a.status, b.mensagem_cliente FROM ticket as A INNER JOIN ticket_enviado_cliente as B INNER JOIN cadastrocliente as C on a.id_ticket = b.fk_id_ticket WHERE a.id_ticket=:id_ticket";						
							$contagem =1;									
							try{
								$result = $conexao->prepare($select);
								$result->bindParam(':id_ticket', $id, PDO::PARAM_INT);			
								$result->execute();
								$contar = $result->rowCount();
								if($contar>0){
									while($mostra = $result->FETCH(PDO::FETCH_OBJ)){
										$idPost = $mostra->id_ticket;
										$usuario = $mostra->id_cadastro_cliente;
										$cliente = $mostra->nome;
										$assunto = $mostra->assunto;
										$status = $mostra->status;
										$mensagem = $mostra->mensagem_cliente;											
										$data	 = $mostra->data_criacao_ticket;	
									}				
								}

								else{
									echo '<div class="alert alert-danger">
					                      <button type="button" class="close" data-dismiss="alert">×</button>
					                      <strong>Aviso!</strong> Não há dados cadastrados com o id informado.
					                </div>';exit;
								}									
							}catch(PDOException $e){
								echo $e;
							}						
									                    
							// ATUALIZAR				
						  	if(isset($_POST['atualizar'])){		
								//$update = "UPDATE cadastroticket SET assunto=:assunto, status=:status, mensagem=:mensagem, data=:data, fk_resposta=:resposta WHERE id=:id";
								$responder = "INSERT INTO ticket_enviado_admin SET fk_id_administrador=:id_admin, fk_id_ticket=:id_ticket, mensagem_admin=:msg_admin";														
								try{
									$result = $conexao->prepare($responder);
									$result->bindParam(':id_admin', $idAdmin, PDO::PARAM_INT);
									$result->bindParam(':id_ticket', $_GET['id'], PDO::PARAM_INT);									
									$result->bindParam(':msg_admin', $_POST['resposta'], PDO::PARAM_STR);
									$result->execute();
									$contar = $result->rowCount();
									if($contar>0){
										echo '<div class="alert alert-success">
						                      <button type="button" class="close" data-dismiss="alert">×</button>
						                      <strong>Sucesso!</strong> Resposta enviada com sucesso!.
						                </div>';
									}else{
										echo '<div class="alert alert-danger">
						                      <button type="button" class="close" data-dismiss="alert">×</button>
						                      <strong>Erro ao cadastrar!</strong> Não foi possível atualizar o post.
						                </div>';
									}			
								}catch(PDOException $e){
									echo $e;
								}								 
							}								 
						?>		            
			            <div class="widget-header">
							<i class="icon-file"></i>
			  				<h3>Editar Ticket - #<?php echo $_GET['id']; ?></h3>		 	
			  				
						</div> <!-- /widget-header -->
			                 			
			  			<div class="widget-content">				      		
			                  
			                <div class="tab-pane" id="formcontrols">
								<form id="edit-profile" class="form-horizontal" action="" method="post" enctype="multipart/form-data">								
									<div class="control-group">											
										<label class="control-label" for="assunto">Título da Postagem:</label>
										<div class="controls">
											<input type="text" class="span6 disabled" id="assunto" value="<?php echo $assunto;?>" name="titulo" placeholder="<?php echo $assunto;?>">
										</div> <!-- /controls -->				
									</div> <!-- /control-group -->
									
									<div class="control-group">											
										<label class="control-label" for="firstname">Nome do cliente:</label>
										<div class="controls">
											<input type="text" class="span6 disabled" id="date" value="<?php echo $cliente;?>" name="data" placeholder="$cliente">
										</div> <!-- /controls -->				
									</div> <!-- /control-group -->
		                            
									
									<div class="control-group">											
										<label class="control-label" for="firstname">Data de Abertura:</label>
										<div class="controls">
											<input type="text" class="span2" id="date" value="<?php echo $data;?>" name="data" placeholder="$data">
										</div> <!-- /controls -->				
									</div> <!-- /control-group -->
		                            
		                            <!--
		                            <div class="control-group">											
										<label class="control-label" for="username">Status</label>
										<div class="controls">
											<select class="span2" id="exibir"  name="exibir">
		                                    	<option selected><?php echo $status; ?></option>
		                                    	<?php if($status!='aberto'){ echo "<option>aberto</option>";}?>
		                                        <?php if($status!='fechado'){ echo "<option>fechado</option>";}?>
		                                    </select>
										</div>				
									</div> -->

		                            <div class="control-group">											
										<label class="control-label" for="email">Última Mensagem:</label>
										<div class="controls">
											<p><?php echo $mensagem ?></p>
										</div> <!-- /controls -->													
									</div>		

									<div class="control-group">											
										<label class="control-label" for="email">Responder ticket:</label>
										<div class="controls">
											<textarea class="span8" name="resposta" id="resposta" value="" rows="10"></textarea>
										</div> <!-- /controls -->				
									</div> <!-- /control-group -->
		                            		            
		            				<div class="form-actions">
										<input type="submit" name="atualizar" class="btn btn-primary" value="Responder">
										<input type="reset" class="btn" value="Cancelar">
									</div> <!-- /form-actions -->
			      				</form>                        
				      		</div> <!-- /widget-content -->
			      		</div> <!-- /widget -->
			  		</div><!-- span 12 -->            
		    	</div><!-- row -->
	        </div>
	        <!-- /span6 --> 
	  	</div>
      <!-- /row --> 
	</div>
    <!-- /container --> 
  </div>
  <!-- /main-inner --> 
</div>
<!-- /main -->
<script type="text/javascript" src="editor/nicEdit.js"></script>
<script type="text/javascript">
	bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
</script>