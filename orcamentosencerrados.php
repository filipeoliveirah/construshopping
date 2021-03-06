<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>ConstruShopping | Orçamentos Encerrados</title>

    <?php include('incs/head.php');?>     
    <?php include('config.php');?>  
  </head>

  <body>
    <?php 
      include("incs/top-menu.php");
      $conn = new Conecta();
    ?>
    <div class="container meupainel">
      <div class="row col-md-3 col-sm-3 col-xs-12">
        <?php include('incs/meupainel-menu.php');?>
      </div>
      <div class="meupainel-container col-md-9 col-sm-9 col-xs-12">
        <div class="meupainel-titulo"><h1 class="text-center">Orçamentos Encerrados</h1></div>
        <!-- Default panel contents -->

        <?php
          $ver_orcamento = $pdo->query("SELECT * FROM orcamento WHERE status = 'Aprovado' LIMIT 2");
          
          $ver_todos_orcamentos = "SELECT * FROM orcamento WHERE status = 'Aprovado'";
          
          try{
            $result = $pdo->prepare($ver_todos_orcamentos);
            $result->execute();
            $contar = $result->rowCount();
            
            //PAGINAÇÃO            
            $i = 1;                        
            $calculate = ceil($contar/2);
            if(isset($_GET['pagina']) == $i){
              $url = $_GET['pagina'];
              $mody = $url * 2 - 2;        
              $ver_orcamento = $pdo->query("SELECT * FROM orcamento WHERE status = 'Aprovado' LIMIT 2 OFFSET $mody");
            }
            //PAGINAÇÃO  

            if($contar > 0){                  
              while($mostrar = $ver_orcamento->FETCH(PDO::FETCH_OBJ)){
                ?>
                <div class="propostasenviadas panel panel-info">          
                  <div class="panel-heading">
                    <div class="escopo">
                      <h5><b>Número do Orçamento:</b> <?php echo $mostrar->id_orcamento; ?> <h5>
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
                    <div class="escopo pull-right">                    
                      <a href="ver-resposta?idorc=<?php echo $mostrar->id_orcamento; ?>">
                        <button class="btn btn-default" type="button">Ver Respostas <span class="badge"><?php echo $conn->verRespostasOrcamento($mostrar->id_orcamento);?></span></button>
                      </a>
                    </div>                       
                  </div>
                  
                  <div class="panel-body">
                    <div class="col-md-12">              
                      <h3>Local da entrega:</h3>
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
                      if($contador > 0){ ?>                        
                        <div class="col-md-12"><h3>Equipamento de desejado:</h3></div> <?php
                        while($exibe = $resultado->FETCH(PDO::FETCH_OBJ)){                     
                          ?>
                          <div class="col-md-12">            
                            <div class="escopo"><i class="fa fa-wrench" aria-hidden="true"></i>
                              <?php echo $exibe->nome_equipamento; ?>
                            </div>                                            
                            <div class="escopo"><i class="fa fa-clock-o" aria-hidden="true"></i><b>Período locação: </b>
                              <?php echo $exibe->periodo_em_dias . ' dia(s)'; ?>
                            </div>                                
                            <div class="escopo"><i class="fa fa-list-ol" aria-hidden="true"></i><b>Quantidade: </b>
                              <?php echo $exibe->quantidade . ' und'; ?>
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
              //PAGINAÇÃO 
              $page_back = $_GET['pagina'] - 1;
              $page_go = $_GET['pagina'] + 1;
              $btn_value = $_GET['pagina'];
              ?>
              <p>Ver mais orçamentos:</p>
              <?php
              if(@$_GET['pagina'] !=1){                
                echo "<a href='?pagina=$page_back' class='btn_pg'> Voltar </a>";
              }
              while($i <= $calculate){
                
                if($_GET['pagina'] == $i){
                  $btn_ativo = "btn_ativo";
                }else {
                  $btn_ativo = "";
                };

                echo "<a href='?pagina=$i' class='btn_pg $btn_ativo'>$i</a>";
                $i++;
                if($i>11){                    
                  echo "<a href='' class='btn_pg'>...</a>";
                  if(@$_GET['pagina'] > 12){
                    echo "<a href='pagina=$btn_value' class='btn_pg'> $btn_value</a>";
                  }else{                        
                    echo "<a href='pagina=12' class='btn_pg'> 12</a>";
                  }

                  if(@$_GET['pagina'] < $calculate){                        
                    echo "<a href='?pagina=$page_go' class='btn_pg'> > </a>";
                  }
                  break;
                }
              }// PAGINAÇÃO

            }//FIM IF            
            else echo '<div class="text-center"> <h3> Você ainda não aprovou um orçamento!</h3> </div>';            
          }//try
          catch(PDOException $e){
            echo $e;
          }                         
        ?> 
      </div>
    </div>
    <?php include("incs/links-uteis.php");?>
    <?php include("incs/footer-menu.php");?>
    <?php include('incs/footer.php');?>
  </body>
</html>