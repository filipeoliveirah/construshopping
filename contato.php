<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>ConstruShopping | Termos de Uso</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <meta property="og:title" content="">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="ConstruShopping">
    <meta property="og:description" content="">

    <?php include('incs/head.php');?>  
  </head>

  <body>
    <?php include("incs/top-menu.php");?>
    <?php include("incs/menu.php");?>
    <div class="container meupainel solicite-orcamento-bg">
      <div class="row col-md-12">
        <div class="solicite-orcamento center-block">
          <h1 class="text-center">Contato</h1>
          <form name="navbar-form navbar-left" method="post" action="<?php $PHP_SELF?>#formulario">
          <div class="form-group">
            <input type="text" class="form-control" id="agenda_nome" name="agenda_nome" placeholder="Nome">                      
            <input type="email" class="form-control" id="agenda_email" name="agenda_email" placeholder="Email">                                 
            <input type="text" class="form-control" id="agenda_telefone" name="agenda_telefone" placeholder="Assunto">            
            <textarea name="message" rows="10" cols="30" class="form-control" placeholder="Mensagem"></textarea>                     
          </div>
          <button type="submit" id="casdastrar" name="cadastrar" class="btn btn-primary btn-lg"><i class="fa fa-paper-plane-o" aria-hidden="true"></i> Enviar</button>
        </form>
        <p>* Seus dados serão guardados de forma segura.</p>
        </div>
      </div>
      
    </div>

    <?php include("incs/links-uteis.php");?>
    <?php include("incs/footer-menu.php");?>
    <?php include('incs/footer.php');?>
  </body>
</html>