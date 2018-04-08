<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>ConstruShopping | Alterar Senha</title>
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
        <div class="meupainel-titulo"><h1 class="text-center">Alterar Senha</h1></div>
        <div class="resp" id="resp">
          <?php 
            if(isset($_POST['atualizar'])){
              if($_POST['novaSenha'] != $_POST['cnovaSenha']){              
                echo "<div class='erros'> <p> Nova senha não coincide com confirmação de senha. </p> </div>";
              }
              else{
                $verificar_cliente = "SELECT * FROM cadastrocliente WHERE id_cadastro_cliente = ? AND senha = ?";
                $array_verificar_cliente = array(
                  $_SESSION['idCliente'],
                  md5($_POST['minhaSenha'])
                );
                $preparar_cliente = $pdo->prepare($verificar_cliente);
                $preparar_cliente->execute($array_verificar_cliente);
                $contar_cliente = $preparar_cliente->rowCount();            
                  
                if($contar_cliente == 1){
                  $atualizar_cliente = "UPDATE cadastrocliente SET senha = ?, csenha = ? WHERE id_cadastro_cliente = ?";
                  $array_atualizar_cliente = array(
                    md5($_POST['novaSenha']),
                    md5($_POST['cnovaSenha']),
                    $_SESSION['idCliente']
                  );                
                  $preparar_atualizacao = $pdo->prepare($atualizar_cliente);
                  $preparar_atualizacao->execute($array_atualizar_cliente);
                  
                  echo "<div class='ok'> <p> Senha atualizada com sucesso! </p> </div>";
                }
                else{
                  $verificar_fornecedor = "SELECT * FROM cadastrofornecedor WHERE id_cadastrofornecedor = ? AND senha = ?";
                  $array_verificar_fornecedor = array(
                    $_SESSION['idCliente'],
                    md5($_POST['minhaSenha'])
                  );
                  $preparar_fornecedor = $pdo->prepare($verificar_fornecedor);
                  $preparar_fornecedor->execute($array_verificar_fornecedor);
                  $contar_fornecedor = $preparar_fornecedor->rowCount();
  
                  if($contar_fornecedor == 1){
                    $atualizar_fornecedor = "UPDATE cadastrofornecedor SET senha = ?, csenha = ? WHERE id_cadastrofornecedor = ?";
                    $array_atualizar_fornecedor = array(
                      md5($_POST['novaSenha']),
                      md5($_POST['cnovaSenha']),
                      $_SESSION['idCliente']
                    );                
                    $preparar_atualizacao_fornecedor = $pdo->prepare($atualizar_fornecedor);
                    $preparar_atualizacao_fornecedor->execute($array_atualizar_fornecedor);

                    echo "<div class='ok'> <p> Senha atualizada com sucesso! </p> </div>";
                  }
                  else{
                    echo "<div class='erros'> <p> Tente novamente. </p> </div>";
                  }
                }
              }
            }
            
          ?>
        </div>
        <form name="navbar-form navbar-left" method="post" action="<?php $PHP_SELF?>#resp">
          <div class="form-group" id="form">
            <input type="password" class="form-control" id="minhaSenha" name="minhaSenha" placeholder="Senha atual">                      
            <input type="password" class="form-control" id="novaSenha" name="novaSenha" placeholder="Nova senha">                      
            <input type="password" class="form-control" id="cnovaSenha" name="cnovaSenha" placeholder="Confirmar senha nova">                      
          </div>
          <button type="submit" id="casdastrar" name="atualizar" class="btn btn-primary btn-lg">Alterar senha</button>
        </form> 
      </div>
    </div>
    <?php include("incs/links-uteis.php");?>
    <?php include("incs/footer-menu.php");?>
    <?php include('incs/footer.php');?>
  </body>
</html>