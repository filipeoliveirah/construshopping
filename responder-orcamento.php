<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>ConstruShopping | Responder Orcamento</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <meta property="og:title" content="">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="ConstruShopping">
    <meta property="og:description" content="">

    <?php include('incs/head.php');?>    
    <?php include('config.php');?>  
  </head>

  <body>
    <?php include("incs/top-menu.php");?>
    <div class="container meupainel">
      <div class="row col-md-3 col-sm-3 col-xs-12">
        <?php include('incs/meupainel-menu.php');?>
      </div>
      
      <div class="meupainel-container col-md-9 col-sm-9 col-xs-12">
        <div class="meupainel-titulo"><h1 class="text-center">Responder Orcamento</h1></div>
        <div class="resp"></div>
        <!-- Default panel contents -->
        <?php
          $ver_orcamento = "SELECT * FROM orcamento INNER JOIN cadastrocliente
          ON cadastrocliente.id_cadastro_cliente = orcamento.fk_id_cadastro_cliente 
          WHERE orcamento.status = ? AND orcamento.id_orcamento = ?";

          $array_ver_orcamento = array(
            'Aguardando',            
            $_GET['idorc']
          );
          
          try{
            $result = $pdo->prepare($ver_orcamento);
            $result->execute($array_ver_orcamento);
            $contar = $result->rowCount();
           
            if($contar > 0){                  
              while($mostrar = $result->FETCH(PDO::FETCH_OBJ)){
                ?>
                <div class="propostasenviadas panel panel-info">          
                  <div class="panel-heading">
                    <div class="escopo">
                    <h5><b>Número do Orçamento:</b> <?php echo $mostrar->id_orcamento; ?> </h5>
                    </div>

                    <div class="escopo">
                      <i class="fa fa-clock-o" aria-hidden="true"></i>
                      <b>Status:</b>
                      <?php echo $mostrar->status; ?>
                    </div>
                    <div class="escopo">
                      <i class="fa fa-calendar" aria-hidden="true"></i>
                      <b>Data de Abertura:</b>
                      <?php $timestamp = strtotime($mostrar->data); echo date("d/m/Y", $timestamp); ?>
                    </div>                     
                  </div>
                  
                  <div class="panel-body">
                    <div class="col-md-12">              
                      <h5><b>Local da entrega:</b></h5>
                      <div class="escopo"><i class="fa fa-road" aria-hidden="true"></i><b>Logradouro:</b> <?php echo utf8_decode(ucfirst($mostrar->rua)); ?></div></br>
                      <div class="escopo"><i class="fa fa-briefcase" aria-hidden="true"></i><b>Bairro:</b> <?php echo utf8_decode(ucfirst($mostrar->bairro)); ?></div>
                      <div class="escopo"><i class="fa fa-map" aria-hidden="true"></i><b>Cidade:</b> <?php echo utf8_decode(ucfirst($mostrar->cidade)); ?></div>
                      <div class="escopo"><i class="fa fa-globe" aria-hidden="true"></i><b>Estado:</b> <?php echo utf8_decode(ucfirst($mostrar->estado)); ?></div></br>                                        
                      <div class="escopo"><i class="fa fa-envelope" aria-hidden="true"></i><b>Cep:</b> <?php echo $mostrar->cep; ?></div>                                        
                      <div class="escopo"><i class="fa fa-home" aria-hidden="true"></i><b>Complemento:</b> <?php echo utf8_decode(ucfirst($mostrar->complemento)); ?></div>
                    </div>
                    <?php
                      $ver_orcamento_enviado_cliente = "SELECT * FROM orcamento_enviado_cliente
                      INNER JOIN orcamento ON orcamento.id_orcamento = orcamento_enviado_cliente.fk_id_orcamento                      
                      WHERE orcamento.id_orcamento = ?";
                                      
                      $array_orcamento_enviado_cliente = array(
                        $mostrar->id_orcamento
                      );

                      $resultado = $pdo->prepare($ver_orcamento_enviado_cliente);
                      $resultado->execute($array_orcamento_enviado_cliente);
                      $contador = $resultado->rowCount();
                      ?>

                      <div class="col-md-12">
                        <h5><b>Equipamento de desejado:</b></h5>
                        <hr class="line">
                      </div>                      
                        
                      <?php                                
                      if($contador > 0){
                        while($exibe = $resultado->FETCH(PDO::FETCH_OBJ)){                     
                          ?>
                          <div class="col-md-12">            
                            <div class="escopo"><i class="fa fa-wrench" aria-hidden="true"></i>
                              <?php echo $exibe->nome_equipamento; ?>
                            </div>                                            
                            <div class="escopo"><i class="fa fa-clock-o" aria-hidden="true"></i><b>Período locação: </b>
                              <?php echo $exibe->periodo_em_dias . ' dia(s)'; ?>
                            </div>                                
                            <div class="escopo"><i class="fa fa-list-ol" aria-hidden="true"></i><b>Qtd: </b>
                              <?php echo $exibe->quantidade . ' und'; ?>
                            </div>                                                            
                            <div class="escopo"><i class="fa fa-list-ol" aria-hidden="true"></i><b>Obs: </b>
                              <?php echo $exibe->observacoes; ?>
                            </div>
                          </div>
                              
                          <div class="col-md-12"></h5>                      
                            <hr class="line">
                          </div>      
                        <?php
                        }
                      }// FIM IF
                    ?>
                    <div class="row col-md-12">                      
                      <form id="formulario" method="POST" enctype="multipart/form-data" name="formulario">
                        <div class="form-group">                                                  
                          <div class="col-md-6">                     
                            <input type="text" class="form-control" id="frete" name="frete" placeholder="Valor do Frete"/> 
                          </div>
                          <div class="col-md-6">                                
                            <input type="text" class="form-control" id="preco" name="preco" placeholder="Preço"/>                          
                            <input type="hidden" class="form-control" id="idorc" name="idorc" value="<?php echo $_GET['idorc']; ?>"/>
                          </div>
                          <div class="col-md-12">
                            <input type="submit" name="responderorcamento" class="acao button btn btn-primary btn-large" value="Responder"/>                 
                          </div>
                        </div>          
                     </form>
                    </div>   

                  </div> 
                                                 
                </div>
                <?php                                            
              }              
            }//FIM IF            
            else echo '<div class="text-center"> <h3> Você ainda não enviou um orçamento!</h3> </div>'; 

          }//try
          catch(PDOException $exc){
            echo "Erro:" . $exc->getMessage();
          }                         
        ?> 
      </div>
    </div>
    <?php include("incs/links-uteis.php");?>
    <?php include("incs/footer-menu.php");?>
    <?php include('incs/footer.php');?>
       
    <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="js/responderorcamento.js"></script>
  </body>
</html>

