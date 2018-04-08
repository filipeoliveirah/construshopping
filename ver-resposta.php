<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>ConstruShopping | Ver Respostas</title>
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
        <div class="meupainel-titulo"><h1 class="text-center">Ver Respostas</h1></div>
        
        <div class="resp">
          <?php include("forms/aprovarorcamento.php");?>
        </div>
        <!-- Default panel contents -->
        <?php
          $ver_orcamento = "SELECT * FROM orcamento INNER JOIN cadastrocliente 
          ON cadastrocliente.id_cadastro_cliente = orcamento.fk_id_cadastro_cliente 
          WHERE orcamento.id_orcamento = ?";
          $array_ver_orcamento = array(          
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
                      <div class="escopo"><i class="fa fa-globe" aria-hidden="true"></i><b>Estado:</b> <?php echo utf8_decode(ucfirst($mostrar->estado)); ?></div>                                        
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

                      <?php                                
                      if($contador > 0){?>
                      
                      <div class="col-md-12"><h5><b>Equipamento de desejado:</b></h5></div> <?php
                        while($exibe = $resultado->FETCH(PDO::FETCH_OBJ)){                     
                          ?>
                          <div class="col-md-12">            
                            <div class="escopo"><i class="fa fa-wrench" aria-hidden="true"></i>
                              <?php echo $exibe->nome_equipamento; ?>
                            </div>                                            
                            <div class="escopo"><i class="fa fa-clock-o" aria-hidden="true"></i><b>Período: </b>
                              <?php echo $exibe->periodo_em_dias . ' dia(s)'; ?>
                            </div>                                
                            <div class="escopo"><i class="fa fa-list-ol" aria-hidden="true"></i><b>Qtd: </b>
                              <?php echo $exibe->quantidade . ' und'; ?>
                            </div>                                
                            <div class="escopo"><i class="fa fa-list-ol" aria-hidden="true"></i><b>Obs: </b>
                              <?php echo $exibe->observacoes; ?>
                            </div>
                          </div>
                          <?php
                        }
                      }// FIM IF
                    ?>
                    <!--
                    <div class="col-md-5">
                      <div class="valor">R$ <span>399,00</span> /mês</div>
                      <div class="detalhes"><b>Prazo de entrega:</b> 7 dias | <b>Parcelas:</b> 3</div>
                      <div class="detalhes"><b>Proposta Enviada em:</b> 01/11/2017 às 12h45m</div>
                      <button type="button" class="btn btn-primary">Ver solicitação</button>
                      <button type="button" class="btn btn-primary">Ver proposta</button>
                    </div> -->
                  </div>                    
                </div>
                <?php                                            
              }
              
              
              $ver_orcamento_aprovado = "SELECT * FROM orcamento_respondido_fornecedor 
              INNER JOIN cadastrofornecedor
              ON orcamento_respondido_fornecedor.fk_id_cadastro_fornecedor = cadastrofornecedor.id_cadastrofornecedor
              WHERE orcamento_respondido_fornecedor.fk_id_orcamento = ? AND orcamento_respondido_fornecedor.status = ?";
              $array_orcamento_aprovado = array($_GET['idorc'], 'Aprovado');
              $resultado_aprovado = $pdo->prepare($ver_orcamento_aprovado);
              $resultado_aprovado->execute($array_orcamento_aprovado);
              $contar_aprovado = $resultado_aprovado->rowCount();


              $ver_orcamento_respondido = "SELECT * FROM orcamento_respondido_fornecedor
              INNER JOIN cadastrofornecedor
              ON orcamento_respondido_fornecedor.fk_id_cadastro_fornecedor = cadastrofornecedor.id_cadastrofornecedor
              WHERE orcamento_respondido_fornecedor.fk_id_orcamento = ?";              
              $array_orcamento_respondido = array( $_GET['idorc']);
              $resultado_respostas = $pdo->prepare($ver_orcamento_respondido);
              $resultado_respostas->execute($array_orcamento_respondido);
              $contador_respostas = $resultado_respostas->rowCount();

              if($contar_aprovado == 1){
                while($exibir_aprovado = $resultado_aprovado->FETCH(PDO::FETCH_OBJ)){ ?>
                  <div class="propostasenviadas panel panel-info" style="background-color:#fcff93 ">          
                    <div class="panel-body">
                      <div class="col-md-12">
                        <div class="escopo"><i class="fa fa-trophy" aria-hidden="true"></i><b>PROPOSTA VENCEDORA: </b>                                                
                          
                        </div> 
                        <div class="escopo"><i class="fa fa-briefcase" aria-hidden="true"></i><b>Fornecedor: </b>                        
                          <?php echo limitarTexto($exibir_aprovado->nomefantasia, $limite=20); ?>
                        </div>            
                        <div class="escopo"><i class="fa fa-truck" aria-hidden="true"></i><b>Frete: </b>
                          <?php echo 'R$ ' . $exibir_aprovado->frete; ?>
                        </div>                                            
                        <div class="escopo"><i class="fa fa-dollar" aria-hidden="true"></i><b>Preço: </b>
                          <?php echo 'R$ ' . $exibir_aprovado->preco; ?>
                        </div>
                        <div class="escopo valor"><i class="fa fa-calculator" aria-hidden="true"></i><b>Total: </b>
                          <span><?php echo 'R$ ' . ($exibir_aprovado->frete + $exibir_aprovado->preco);?></span>
                        </div> 
                      </div>  
                    </div>
                  </div><?php
                }
              }

              if($contador_respostas > 0){
                while($exibir_respostas = $resultado_respostas->FETCH(PDO::FETCH_OBJ)){?>
                  <div class="propostasenviadas panel panel-info">
                    <div class="panel-body">
                      <div class="col-md-12">
                        <div class="escopo"><i class="fa fa-briefcase" aria-hidden="true"></i><b>Fornecedor: </b>                        
                          <?php echo limitarTexto($exibir_respostas->nomefantasia, $limite=20); ?>
                        </div>            
                        <div class="escopo"><i class="fa fa-truck" aria-hidden="true"></i><b>Frete: </b>
                          <?php echo 'R$ ' . $exibir_respostas->frete; ?>
                        </div>                                            
                        <div class="escopo"><i class="fa fa-dollar" aria-hidden="true"></i><b>Preço: </b>
                          <?php echo 'R$ ' . $exibir_respostas->preco; ?>
                        </div>
                        <div class="escopo valor"><i class="fa fa-calculator" aria-hidden="true"></i><b>Total: </b>
                          <span><?php echo 'R$ ' . ($exibir_respostas->frete + $exibir_respostas->preco);?></span>
                        </div>
                        <?php
                        if($contar_aprovado == 1){?>                                        
                          <div class="escopo pull-right">
                            <button type="button" class="btn btn-defatul">Encerrado</button>
                          </div>
                          <?php
                        }
                        else{?>                                          
                          <div class="escopo pull-right">
                            <form name="formulario" id="formulario" method="post" enctype="multipart/form-data" action="">
                              <input type="hidden" name="id_orcamento_enviado_fornecedor" value="<?php echo $exibir_respostas->id_orcamento_enviado_fornecedor ?>" >
                              <input type="submit" name="aprovar" class="acao button btn btn-primary btn-large" value="Aprovar"/>
                            </form>
                          </div><?php
                        }?>
                      </div>
                    </div>
                  </div> <?php
                }
              }//FIM RESPOSTA
                
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
    <script type="text/javascript" src="js/aprovarorcamento.js"></script>
  </body>
</html>

