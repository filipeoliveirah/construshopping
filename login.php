<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>ConstruShopping | Login</title>
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
    <?php include('config.php');?>
    <?php include("incs/top-menu.php");?>
    <?php include("incs/menu.php");?>
    <div class="container meupainel solicite-orcamento-bg">
      <div class="row col-md-12">
        <div class=" solicite-orcamento center-block">
          <h1 class="text-center">Login</h1>
           <p>* Faça login ou cadastre-se para ter acesso a áreas restritas</p>
          <div class="resp">
          </div>
          
          <form id="formulario" method="POST" enctype="multipart/form-data" name="formulario">
            <div class="form-group">                     
              <input type="email" class="form-control" id="email" name="email" placeholder="Email"/>                                 
              <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha"/>
              <input type="submit" name="login" class="acao button btn btn-primary btn-large" value="Enviar"/>                 
            </div>          
          </form>         
        </div>
      </div>      
    </div>
    <?php include("incs/links-uteis.php");?>
    <?php include("incs/footer-menu.php");?>
    <?php include('incs/footer.php');?>


    <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="js/login.js"></script>
  </body>
</html>