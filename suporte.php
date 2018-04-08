<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>ConstruShopping | Suporte</title>
    <?php
    include_once('incs/head.php');  
    include_once('config.php');
    ?>    
  </head>

  <body>
    <?php include("incs/top-menu.php");?>
    <div class="container meupainel">
      <div class="row col-md-3 col-sm-3 col-xs-12">
        <?php include('incs/meupainel-menu.php');?>
      </div>
      <div class="meupainel-container col-md-9 col-sm-9 col-xs-12">
        <div class="meupainel-titulo">
          <h1 class="text-center">Suporte - Abrir Ticket</h1>
        </div>
        <div class="resp">
        </div>
      
        <form name="formulario" id="formulario" method="post" enctype="multipart/form-data" >
          <div class="form-group">                
            <input type="text" class="form-control" id="assunto" name="assunto" placeholder="Assunto">                                            
            <textarea name="mensagem" id="mensagem" rows="10" cols="30" class="form-control" placeholder="Digite sua mensagem"></textarea> 
            <input type="hidden" class="form-control" id="status" name="status" value="aberto">
            <input type="hidden" class="form-control" id="email" name="email" value="<?php echo $_SESSION['email'];?>">
            <input type="hidden" class="form-control" id="usuario" name="usuario" value="<?php echo $_SESSION['usuario'];?>">            
            <input type="hidden" class="form-control" id="idUsuario" name="idUsuario" value="<?php echo $_SESSION['idCliente'];?>">                     
          </div>
          <input type="submit" name="next" class="acao button btn btn-primary btn-large" value="Enviar"/> 
        </form> 
      </div>
    </div>
    <?php include("incs/links-uteis.php");?>
    <?php include("incs/footer-menu.php");?>
    <?php include('incs/footer.php');?>

    <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="js/cadastroticket.js"></script>
  </body>
</html>