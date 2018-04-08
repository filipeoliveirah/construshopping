<section class="pad-lg light-gray-bg" style="background-color:#010b14;">
  <div class="container dicasconstrushopping">
    <div class="row">
      <h1 class="text-center">Dicas do ConstruShopping</h1>
      <h4 class="text-center">para você se inspirar</h4>
    </div>
    <div class="col-md-9 dicasconstrushopping">
      <?php
      
      $selecionar_postagens = "SELECT * FROM tb_postagens ORDER BY id DESC LIMIT 4";
      $resultado_selecao_postagens = $pdo->prepare($selecionar_postagens);
      $resultado_selecao_postagens->execute();
      $contar_postagens = $resultado_selecao_postagens->rowCount();
      
      if($contar_postagens > 0){
        while ($exibe = $resultado_selecao_postagens->FETCH(PDO::FETCH_OBJ)){
        $texto_postagem = strip_tags($exibe->descricao);  
        ?>
        
        <div class="col-sm-12 col-md-6">
          <div class="thumbnail">
            <img src="upload/postagens/<?php echo $exibe->imagem; ?>" alt="" class="img-responsive">
            <div class="caption">
              <h3><?php echo $exibe->titulo; ?></h3>
              <p><?php echo limitarTexto($texto_postagem, 200); ?></p>
              <a href="blogsingle?id_postagem=<?php echo $exibe->id; ?>" class="btn btn-primary" role="button">Ler</a>
              <!--
              <div class="dicasconstrushopping-curti">
                <i class="fa fa-thumbs-o-up" aria-hidden="true"> 52</i>
              </div>
              -->
              <?php 
                $query_comentarios = "SELECT * FROM comentario_feito_cliente 
                WHERE fk_id_tb_postagens = ?";
                $selec_comentarios = $pdo->prepare($query_comentarios);
                $array_comentario = array($exibe->id);
                $selec_comentarios->execute($array_comentario);
                $contar_comentarios = $selec_comentarios->rowCount();
              ?>
              <div class="dicasconstrushopping-comentarios">       
                <i class="fa fa-commenting-o" aria-hidden="true"> <?php echo $contar_comentarios; ?></i>
              </div>
            </div>
          </div>
        </div>
        <?php 
        }
      }
      ?>
    </div> 
    <div class="col-md-3 comentarios">
      <h1> Comentários Recentes</h1>
      <?php      
        $query_comentarios = "SELECT a.fk_id_cadastro_cliente, a.fk_id_tb_postagens, a.comentario, a.data,
        b.id_cadastro_cliente, b.nome, b.sobrenome
        FROM comentario_feito_cliente AS A INNER JOIN cadastrocliente AS B
        ON a.fk_id_cadastro_cliente = b.id_cadastro_cliente LIMIT 4";

        $selec_comentarios = $pdo->prepare($query_comentarios);
        $array_comentario = array($_GET['id_postagem']);
        $selec_comentarios->execute($array_comentario);
        $contar_comentarios = $selec_comentarios->rowCount();
        
        if($contar_comentarios > 0){
          while ($exibir_comentario = $selec_comentarios->FETCH(PDO::FETCH_OBJ)){?>
          <div class="col-sm-12 col-md-12">
            <div class="thumbnail comentarios">
              <img src="img/clientes/cliente_img_placeholder.png" alt="" class="img-responsive img-circle img-small">
              <div class="caption">
                <h3><?php echo utf8_decode($exibir_comentario->nome) . " " . utf8_decode($exibir_comentario->sobrenome) ?></h3>
                <span><?php $timestamp = strtotime($exibir_comentario->data); echo date("d/m/Y", $timestamp);?><span>
                <p> <?php echo utf8_decode(limitarTexto($exibir_comentario->comentario, 150)); ?> </p>
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