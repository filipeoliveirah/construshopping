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
          <?php $incrementapainel=0; while ( $incrementapainel <= 3) {?>
        <div class="propostasenviadas panel panel-info">          
          <div class="panel-heading"><h4>Produção de conteúdo para Mídias Sociais<h4></div>
          <div class="panel-body">
            <div class="col-md-7">
              <p class="descricao">Gestão de mídias sociais Desenvolvimento de conteúdo Impulsionamento Consultoria em marketing digital </p>
              <div class="escopo"><i class="fa fa-user-circle-o" aria-hidden="true"></i>Filipe</div>
              <div class="escopo"><i class="fa fa-globe" aria-hidden="true"></i>Salvador</div>
              <div class="escopo"><i class="fa fa-briefcase" aria-hidden="true"></i>MEI</div>
              <div class="escopo"><i class="fa fa-star" aria-hidden="true"></i>Custo Benefício</div>
              <div class="escopo"><i class="fa fa-usd" aria-hidden="true"></i>Menor Preço</div>
              <div class="status"><i class="fa fa-clock-o" aria-hidden="true"></i><b>Status:</b> Recebendo orçamentos</div>
            </div>
            <div class="col-md-5">              
              <div class="detalhes"><b>Finaliza em: </b>7 dias <b> / Participantes:</b> 4</div>
              <button type="button" class="btn btn-primary">Ler orçamento</button>
              <button class="btn btn-primary" type="button">Enviar: <span class="badge">37</span> ConstruCash</button>
            </div>            
          </div>                    
        </div>
        <?php $incrementapainel++;}?>
      </div>
    </div>
    <?php include("incs/links-uteis.php");?>
    <?php include("incs/footer-menu.php");?>
    <?php include('incs/footer.php');?>
  </body>
</html>