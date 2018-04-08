<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>ConstruShopping | Orçamentos Recebidos</title>
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
        <div class="meupainel-titulo"><h1 class="text-center">Orçamentos Recebidos</h1></div>
        <!-- Default panel contents -->
        <?php
          
          $ver_orcamento = "SELECT o.id_orcamento, o.data, o.status, o.rua, o.bairro, o.cidade, o.estado, o.complemento, o.cep, c.id_cadastro_cliente 
          FROM orcamento AS O INNER JOIN cadastrocliente AS C 
          ON c.id_cadastro_cliente = o.fk_id_cadastro_cliente 
          WHERE o.status = 'Aguardando' LIMIT 2 ";

          $ver_todos_orcamentos = "SELECT o.id_orcamento, o.data, o.status, o.rua, o.bairro, o.cidade, o.estado, o.complemento, o.cep, c.id_cadastro_cliente 
          FROM orcamento AS O INNER JOIN cadastrocliente AS C 
          ON c.id_cadastro_cliente = o.fk_id_cadastro_cliente 
          WHERE o.status = 'Aguardando' ";
          
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
              $ver_orcamento = $pdo->query("SELECT o.id_orcamento, o.data, o.status, o.rua, o.bairro, o.cidade, o.estado, o.complemento, o.cep, c.id_cadastro_cliente 
              FROM orcamento AS O INNER JOIN cadastrocliente AS C 
              ON c.id_cadastro_cliente = o.fk_id_cadastro_cliente 
              WHERE o.status = 'Aguardando' ORDER BY o.id_orcamento DESC LIMIT 2 OFFSET $mody");
            }
            //PAGINAÇÃO         
            
            if($contar > 0){                  
              while($mostrar = $ver_orcamento->FETCH(PDO::FETCH_OBJ)){
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
                    
                    <!--BOTAO-->
                    <?php                      
                      $orc_foi_enviado = $pdo->prepare("SELECT fk_id_cadastro_fornecedor, fk_id_orcamento FROM orcamento_respondido_fornecedor 
                      WHERE fk_id_orcamento = ?
                      AND fk_id_cadastro_fornecedor = ?" );

                      $array_orc_foi_enviado = array(
                        $mostrar->id_orcamento,
                        $_SESSION['idCliente']
                      );

                      $orc_foi_enviado->execute($array_orc_foi_enviado);
                      $contar_orc_foi_enviado = $orc_foi_enviado->rowCount();

                      if($contar_orc_foi_enviado == 0){ ?>
                        <div class="escopo pull-right">
                          <a href="responder-orcamento?idorc=<?php echo $mostrar->id_orcamento; ?>">
                            <button type="button" class="btn btn-warning">Responder Orçamento</button>
                          </a>
                        </div> <?php
                      }
                      elseif($contar_orc_foi_enviado >= 1){ ?>
                        <div class="escopo pull-right">                          
                            <button type="button" class="btn btn-default">
                              <i class="fa fa-check-square"></i> Orçamento respondido
                            </button>                          
                        </div><?php
                      }
                    ?>                    
                    <!--BOTAO-->
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
                      $ver_orcamento_enviado_cliente = "SELECT a.id_orcamento, b.id_orcamento_enviado_cliente, b.nome_equipamento, b.periodo_em_dias, b.quantidade,
                      b.observacoes, b.periodo_em_dias
                      FROM orcamento_enviado_cliente AS B INNER JOIN orcamento AS A ON a.id_orcamento = b.fk_id_orcamento                      
                      WHERE a.id_orcamento = ?";
                                      
                      $array_orcamento_enviado_cliente = array(
                        $mostrar->id_orcamento
                      );

                      $resultado = $pdo->prepare($ver_orcamento_enviado_cliente);
                      $resultado->execute($array_orcamento_enviado_cliente);
                      $contador = $resultado->rowCount();
                      ?>

                      <div class="col-md-12"><h3>Equipamento(s) desejado(s):</h3></div>
                      
                      <?php                                
                      if($contador > 0){
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
                    echo "<a href='?pagina=$btn_value' class='btn_pg'> $btn_value</a>";
                  }else{                        
                    echo "<a href='?pagina=12' class='btn_pg'> 12</a>";
                  }

                  if(@$_GET['pagina'] < $calculate){                        
                    echo "<a href='?pagina=$page_go' class='btn_pg'> > </a>";
                  }
                  break;
                }
              }// PAGINAÇÃO
              
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
  </body>
</html>

