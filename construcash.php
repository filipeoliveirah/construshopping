<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>ConstruShopping | ConstruCash</title>

    <?php include_once('incs/head.php');?>  
    <?php include_once('config.php');?> 

  </head>

  <body>
    <?php include("incs/top-menu.php");?>
    <div class="container meupainel">
      <div class="row col-md-3 col-sm-3 col-xs-12">
        <?php include('incs/meupainel-menu.php');?>
      </div>
      <div class="meupainel-container construcash col-md-9 col-sm-9 col-xs-12" id="construcash">
        <div class="meupainel-titulo">
          <div id="loading">
            <img src="img/loading.gif" class="loading">
            <span>Carregando...</span>
          </div>
          <h1 class="text-center">ConstruCash</h1></div>
        <div class="resp"></div>
        <div class="col-md-6">
          <div class="construcashover text-center">
            <p>100 ConstruCash</p>
            <button class="btn btn-success" value="1">Comprar (R$ 69,00)</button>            
          </div>
          <img src="img/theme/construction-3.jpg" class="img-responsive img-rounded">
        </div>
        <div class="col-md-6">
          <div class="construcashover text-center">
            <p>200 ConstruCash</p>            
            <button class="btn btn-success" value="2">Comprar (R$ 99,00)</button>
          </div>
          <img src="img/theme/Services-preparation-evaluation-reclamation.jpg" class="img-responsive img-rounded"> 
        </div>
        <div class="col-md-6">
          <div class="construcashover text-center">
            <p>500 ConstruCash</p>
            <button class="btn btn-success" value="3">Comprar (R$ 199,00)</button>
          </div>
          <img src="img/theme/california-contractor-insurance.jpg" class="img-responsive img-rounded">
        </div>
        <div class="col-md-6">
          <div class="construcashover text-center">
            <p>1000 ConstruCash</p>
            <button class="btn btn-success" value="4">Comprar (R$ 259,00)</button>
          </div>
          <img src="img/theme/shutterstock_67044274.jpg" class="img-responsive img-rounded">
        </div>
      </div>
    </div>

    <!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
    <?php  
      //$url = 'https://pagseguro.uol.com.br/checkout/v2/payment.html';
      $url ='https://sandbox.pagseguro.uol.com.br/v2/checkout/payment.html';  
    ?>
    <form id="comprar" action="https://sandbox.pagseguro.uol.com.br/v2/checkout/payment.html" method="post" onsubmit="PagSeguroLightbox(this); return false;">        
      <input type="hidden" name="code" id="code" value="" />
    </form>
    <script type="text/javascript" src="https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js"></script>
    <!-- FINAL FORMULARIO BOTAO PAGSEGURO -->
    
    <script>
      $(document).ready(function(){
        $("button").click(function enviarPagseguro(codigo){
          let idConstrucash = $(this).attr('value'); 
          let id_cadastrofornecedor = <?php echo $_SESSION['idCliente']; ?>;
          $('#loading').css('visibility','visible');
          $.post('salvarPedido.php',{idConstrucash: idConstrucash, id_cadastrofornecedor: id_cadastrofornecedor },function(idPedido){
            $.post('pagamento.php',{idPedido: idPedido},function(data){
              $('#loading').css('visibility','hidden');
              $('#code').val(data);
              $('#comprar').submit();
            });
          });                  
        });     
      });
    </script>

   
    <?php include("incs/links-uteis.php");?>
    <?php include("incs/footer-menu.php");?>
    <?php include('incs/footer.php');?>
  </body>
</html>