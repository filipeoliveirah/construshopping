<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>ConstruShopping</title>
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
    <?php include("incs/menu.php");?>      

    <!--
    <section id="main-info" class="pad-lg" style="background-color: #010b14">
      <div class="container">
        <div class="row">
          <h2 class="text-center">CIMATEC INDUSTRIAL</h2>
        </div>
        <div class="row">
          <div class="col-sm-12 wow fadeIn" data-wow-delay="0.4s">
            <hr class="line blue">            
            <p>A Federação das Indústrias do Estado da Bahia e o SENAI CIMATEC têm a honra de convidá-lo para o evento de Lançamento da Pedra Fundamental do CIMATEC Industrial, em Camaçari.</p>
          </div>
          <div class="col-sm-12 wow fadeIn" data-wow-delay="0.8s">            
            <p>O projeto CIMATEC Industrial implantará um centro de PD&I, extensão do Campus CIMATEC de Salvador, em ambiente industrial com foco no escalonamento de produção (scale-up), testes de grande porte, plantas piloto e desenvolvimento de protótipos em escala real, impulsionando todo o processo de desenvolvimento tecnológico e inovação industrial.</p>
          </div>          
        </div>
        
      </div>
    </section>-->

    <section class="pad-xs light-gray-bg" style="background-color:#010b14;">
      <div class="container dicasconstrushopping wow fadeIn" data-wow-delay="0.7s">
        <div class="row">
          <h1 class="text-center">Dicas do ConstruShopping</h1>
          <h4 class="text-center">para você se inspirar</h4>
        </div>
        <div class="col-md-9 col-sm-12 dicasconstrushopping">
          <?php          
          $query_comentarios = "SELECT a.fk_id_cadastro_cliente, a.fk_id_tb_postagens, a.comentario, a.data,
          b.id_cadastro_cliente, b.nome, b.sobrenome
          FROM comentario_feito_cliente AS A INNER JOIN cadastrocliente AS B
          ON a.fk_id_cadastro_cliente = b.id_cadastro_cliente 
          WHERE a.fk_id_tb_postagens = ?";
          $selec_comentarios = $pdo->prepare($query_comentarios);
          $array_comentario = array($_GET['id_postagem']);
          $selec_comentarios->execute($array_comentario);
          $contar_comentarios = $selec_comentarios->rowCount();

          $selecionar_postagens = "SELECT * FROM tb_postagens WHERE id = ?";
          $resultado_selecao_postagens = $pdo->prepare($selecionar_postagens);
          $array_selecao_postagens = array($_GET['id_postagem']);
          $resultado_selecao_postagens->execute($array_selecao_postagens);
          $contar_postagens = $resultado_selecao_postagens->rowCount();
          
          if($contar_postagens > 0){
            while ($exibe = $resultado_selecao_postagens->FETCH(PDO::FETCH_OBJ)){ ?> 
              <div class="thumbnail">
                <img src="upload/postagens/<?php echo $exibe->imagem; ?>" alt="" class="img-responsive">
                <div class="caption">
                  <h3><?php echo $exibe->titulo; ?></h3>
                  <p><?php echo $exibe->descricao; ?></p>
                  <!--
                  <div class="dicasconstrushopping-curti">
                    <i class="fa fa-thumbs-o-up" aria-hidden="true"> <?php echo $contar_comentarios; ?> </i>
                  </div>
                  -->
                  <div class="dicasconstrushopping-comentarios">       
                    <span>
                      <i class="fa fa-commenting-o" aria-hidden="true"></i>
                      <?php echo $contar_comentarios; ?>
                      Comentário(s)
                    </span>
                  </div>
                </div>
              </div>
            <?php 
            }?>            
              <h4 class="text-center">Comentar na postagem</h4>
              <div class="resp"></div>              
              <form id="formulario" method="post" enctype="multipart/form-data" name="formulario">
                <div class="form-group">                                
                  <textarea class="form-control" rows="5" id="comentario" name="comentario" placeholder="Digite seu comentário"></textarea>
                  <input type="hidden" name="idCliente" value="<?php echo $_SESSION['idCliente'] ?>">                  
                  <input type="hidden" name="idPostagem" value="<?php echo $_GET['id_postagem'] ?>">
                  <input type="hidden" name="usuarioIsCliente" value="<?php echo $_SESSION['usuarioIsCliente'] ?>">                  
                  <input type="submit" name="comentar" class="acao button btn btn-primary btn-large" value="Enviar"/>                 
                </div>          
              </form>
            <?php
          }
          ?>
        </div> 
        <div class="col-md-3 col-sm-12 comentarios">
          <h1> Comentários Recentes</h1>
          <?php
          if($contar_comentarios > 0){
            while ($exibir_comentario = $selec_comentarios->FETCH(PDO::FETCH_OBJ)){?>
            <div class="col-sm-12 col-md-12">
              <div class="thumbnail comentarios">
                <img src="img/clientes/cliente_img_placeholder.png" alt="" class="img-responsive img-circle img-small">
                <div class="caption">
                  <h3><?php echo utf8_decode($exibir_comentario->nome) . " " . utf8_decode($exibir_comentario->sobrenome) ?></h3>
                  <span><?php $timestamp = strtotime($exibir_comentario->data); echo date("d/m/Y", $timestamp);?><span>
                  <p> <?php echo utf8_decode($exibir_comentario->comentario); ?> </p>
                </div>
              </div>
            </div>
            <?php 
            }
          }else{ echo "<p> Não há comentários na postagem </p>"; }
          ?>
        </div>
      </div>
    </section>

    <?php include("incs/links-uteis.php");?>
    <?php include("incs/footer-menu.php");?>
    <?php include('incs/footer.php');?>   
    
    <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="js/comentarpostagem.js"></script>
    </body>
</html>