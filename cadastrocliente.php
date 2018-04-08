<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>ConstruShopping | Cadastro Cliente</title>
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
    <div class="container meupainel solicite-orcamento-bg">
      <div class="row col-md-12">
        <div class=" solicite-orcamento center-block">
          <h1 class="text-center">Cadastro de Cliente</h1>
          <p class="text-center">Com cadastro de cliente você poderá solicitar e aprovar orçamentos além de fazer comentários, abrir tickets...</p>
          <div class="resp">
          </div>
          <form id="formulario" method="post" enctype="multipart/form-data" name="formulario">
            <div class="form-group">
              <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome"/>                      
              <input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="Sobrenome"/>                      
              <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuário"/>                      
              <input type="email" class="form-control" id="email" name="email" placeholder="Email"/>                                 
              <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha"/>                    
              <input type="password" class="form-control" id="csenha" name="csenha" placeholder="Confirmar Senha"/>                    
              <!--<div class="checktermos">      
                <input type="checkbox" class="" id="agenda_telefone" name="agenda_telefone" placeholder="Senha"/>
                <p><a href="termos-de-uso">Termos de Uso</a></p>
              </div>-->
              <input type="submit" name="next" class="acao button btn btn-primary btn-large" value="Enviar"/>                 
            </div>          
          </form>
          <p>* Seus dados serão guardados de forma segura.</p>
        </div>
      </div>
      
    </div>
    <?php include("incs/links-uteis.php");?>
    <?php include("incs/footer-menu.php");?>
    <?php include('incs/footer.php');?>

    <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="js/cadastrocliente.js"></script>
  </body>
</html>