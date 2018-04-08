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
</head>

<body>  
    <?php include('config.php');?>
    <?php include("incs/top-menu.php");?>       
    <?php include("incs/menu.php");?>       
    <header>
      <div class="container">       
        <div class="row header-info" style="position:relative;">
          <div class=" text-center" data-wow-delay="0.7s">
            <h1 class="wow fadeIn">Receba propostas das melhores empresas</h1>
              <div class="col-md-4">
                <h2>1. Conte-nos o que você precisa</h2>
                <p class="text-center">Responda algumas perguntas sobre suas preferências.</p>
              </div>
              <div class="col-md-4">
                <h2>2. Receba Propostas Gratuitamente</h2>
                <p class="text-center">Conecte-se com os melhores fornecedores de serviços.</p>
              </div>
              <div class="col-md-4">
                <h2>3. Contrate o melhor fornecedor</h2>
                <p class="text-center">Compare com facilidade, negocie e faça excelentes negócios!</p>
              </div>           
          </div>
        </div>
        <!--
        <div class="slideform">
          <form class="navbar-form" role="search">
            <div class="form-group">
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <button type="submit" class="btn btn-primary btn-lg scroll">Buscar</button>
          </form>
        </div>-->
      </div>
    </header>
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

    <?php include('incs/empresasdestaque.php');?>
    <?php include('incs/blogcatalogo.php');?>


    <?php include("incs/links-uteis.php");?>
    <?php include("incs/footer-menu.php");?>
    <?php include('incs/footer.php');?>


    

   
    </body>
</html>