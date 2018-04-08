<?
  $conn = new conecta();
  $cliente_id_logado = $_SESSION['idCliente'];
  $mostrarConstrucash = $conn->consultarConstrucash($cliente_id_logado);  
?>
<div class="nav">
  <div class="container-fluid topo-barra">
    
    <div class="col-md-5 col-xs-12 topo-barra-instituicoes topo-barra-destaque"> 
      <ul class="nav navbar-nav text-center list-inline">
          <?php if(isset($_SESSION['usuario']) && $_SESSION['usuarioIsCliente'] == 'pessoafisica'){?>
            <li><a href="solicitar-orcamento">Solicitar orçamento</a></li><?php
          }else{}?>
          <?php
            if( !isset($_SESSION['usuarioIsCliente']) ) {?>              
              <li><a href="cadastrofornecedor">Seja Fornecedor</a></li>
              <li><a href="cadastrocliente">Seja cliente</a></li><?php 
            }
          ?>
      </ul>       
    </div>
    
   <div class="col-md-2 col-xs-12 topo-barra-instituicoes">
    <ul class="nav navbar-nav container-fluid text-center">
        <li><a>Siga-nos</a></li>
        <li><a href="https://facebook.com/construshopping" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
        <li><a href="https://instagram.com/construshopping" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>        
      </ul>
   </div>

    <div class="col-md-5 col-xs-12 topo-barra-instituicoes homeavatar">
      <ul class="nav navbar-nav navbar-right text-center list-inline">
        <?php if (!isset($_SESSION['email'])) {?>          
          <li>
            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
            <a href="login">Fazer login</a>
          </li>
          <li>
            <i class="fa fa-key" aria-hidden="true"></i>
            <a href="lembrarsenha">Esqueci senha</a>
          </li>
        <?php }  else{ 
          $imagemClientePlaceHolder = 'cliente_img_placeholder.png';          
          $imagemEmpresaPlaceHolder = 'empresa_img_placeholder.png';
          ?>
          <li><p id="idCliente" value="<?php $cliente_id_logado = $_SESSION['idCliente']; echo $cliente_id_logado; ?>">Olá, <?php echo $_SESSION['usuario']; ?></br>
            <?php
              if($_SESSION['usuarioIsCliente'] == 'pessoajuridica'){
              echo 'Construcash: R$ '.$mostrarConstrucash["construcash"];
              }else{
                echo 'Meu id: '.$cliente_id_logado;
              }
            ?></p>
          </li>
          <li><img src="img/clientes/<?php echo $imagemClientePlaceHolder?>" class="img-responsive img-circle"></li>
          <li>
            <p><i class="fa fa-user-circle-o" aria-hidden="true"></i><a href="meupainel">Meu painel</a></p>
            <p><i class="fa fa-sign-out" aria-hidden="true"></i><a href="logout">Logout</a></p>                       
          </li>
        <?php } ?>         
      </ul>
    </div>

  </div>
</div>