<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>ConstruShopping | Meu painel</title>
    <?php
    include('incs/head.php');    
    include('config.php');
    ?>
  </head>
  
  <body>
    <?php                      
      $conn = new conecta();
      $listarOrcamento = $conn->listarOrcamento();            
    ?>
    <?php include_once("incs/top-menu.php");?>
    <div class="container meupainel">
      <div class="row col-md-3 col-sm-3 col-xs-12">
        <?php include('incs/meupainel-menu.php');?>
      </div>
      <div class="meupainel-container col-md-9 col-sm-9 col-xs-12">
        <div class="meupainel-titulo"><h1 class="text-center">Meu painel</h1></div>
        <?php
        if($_SESSION['usuarioIsCliente'] == 'pessoajuridica'){ ?>
          <div class="sessao">
            <div class="col-md-6">
              <div class="meupainel-container-destaque">                        
                <div class="meupainel-banner">
                  <img src="img/theme/sucesso.jpg" class="img-responsive img-rounded">
                </div>                
                <p><b>Aumente suas chances de sucesso! </b>Adquira construcashs responda mais orçamentos.</p>
                <button class="btn btn-primary" type="button">Meu saldo <span class="badge"><?php echo $mostrarConstrucash["construcash"];?></span></button>
              </div>  
            </div>

            <div class="col-md-6">
              <div class="meupainel-container-banner">
                <h2>Oportunidades Disponíveis</h2>
                <p>As oportunidades voam, e você não vai querer perder! Envie propostas para clientes à sua espera!</p>            
                <a href="orcamentosrecebidos?pagina=1">
                  <button class="btn btn-primary" type="button">Orçamentos <span class="badge"><?php echo $listarOrcamento; ?></span></button>
                </a>
              </div>
              <div class="meupainel-container-banner">
                <h2>Novidades!</h2>
                <p><b>02/03/2018</b> -  Bônus inicial para todos os fornecedores.</p>
                <p><b>25/02/2018</b> -  Cliente final poderá escolher vencedor automaticamente.</p>
              </div>
            </div>
          </div><?php
        }
        ?>    
        <div class="sessao">
          <div class="col-md-12">
            <h1>Deseja voar realmente alto?</h1>
            <p>Existem várias formas de tornar a sua página mais atrativa, e todas elas contam também no ranqueamento para os resultados de busca na Tratativa, e você poderá editar os itens abaixo para que sua empresa se destaque e colha muitos resultados positivos! Clique aqui para Ver Página de Exemplo ou se preferir visite nosso FAQ (Perguntas Frequentes).</p>
          </div>
          <div class="col-md-4">
            <h2>Cadastro</h2>
            <p>Os dados cadastrais sao cruciais para tornar a plataforma Tratativa um ambiente seguro e assertivo.</p>
            <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Dados Cadastrais</li>
            <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Cadastro Empresa</li>
            <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Serviços</li>
            <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Documentos</li>
            <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Horário de Funcionamento</li>
          </div>
          <div class="col-md-4">
            <h2>Imagens</h2>
            <p>Imagens falam mais do que mil palavras, por este motivo insira imagens atrativas.</p>
            <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Marca</li>
            <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Imagens de Capa</li>
            <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Principais Clientes</li>
            <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Fotos da empresa</li>
          </div>
          <div class="col-md-4">
            <h2>Texto</h2>
            <p>Insira textos originais, que você não utilizou nem mesmo em seu próprio site.</p>
            <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Breve descrição</li>
            <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Sobre a empresa</li>
            <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Missão</li>
            <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Experiência</li>
          </div>
        </div>
      </div>
    </div>
    <?php include("incs/links-uteis.php");?>
    <?php include("incs/footer-menu.php");?>
    <?php include('incs/footer.php');?>
  </body>
</html>