<div class="meupainel-menu">
  <div class="meupainel-menu-logo"><a href="index.php"><img src="img/theme/logotipo.png" class="img-responsive"></a></div>
  <hr class="line"></hr>
  <li><a href="index"> <i class="fa fa-home" aria-hidden="true"></i>HomePage</a></li>
  <li><a href="meupainel"> <i class="fa fa-th" aria-hidden="true"></i>Meu Painel</a></li>

  <?php 
    if( $_SESSION['usuarioIsCliente'] == 'pessoafisica' ){?> 
      <hr class="line"></hr>         
      <h3>Painel Cliente</h3>      
      <li><a href="solicitar-orcamento"> <i class="fa fa-paper-plane-o" aria-hidden="true"></i>Solicitar orçamento</a></li>
      <li><a href="orcamentos-enviados?pagina=1"> <i class="fa fa-file-text-o" aria-hidden="true"></i>Orçamentos enviados</a></li>
      <li><a href="orcamentosaprovados?pagina=1"> <i class="fa fa-check" aria-hidden="true"></i>Orçamentos Aprovados</a></li>

      <hr class="line"></hr>
  
      <?php
    }elseif( $_SESSION['usuarioIsCliente'] == 'pessoajuridica' ){?>
      <hr class="line"></hr>  
      <h3>Painel Empresa</h3>
      <li><a href="orcamentosrecebidos?pagina=1"> <i class="fa fa-briefcase" aria-hidden="true"></i>Orçamentos Recebidos</a></li>
      <li><a href="orcamentosencerrados?pagina=1"> <i class="fa fa-clock-o" aria-hidden="true"></i>Orçamentos Encerrados</a></li>
      <!--<li><a href="empresa"> <i class="fa fa-laptop" aria-hidden="true"></i>Ver página</a></li>
      <li><a href="meupainel"> <i class="fa fa-pencil" aria-hidden="true"></i>Editar Página</a></li>-->
      <li><a href="construcash"> <i class="fa fa-usd" aria-hidden="true"></i>ConstruCash</a></li>
      <hr class="line"></hr>
      <?php 
    }
  ?>

  <h3>Minha Conta</h3>
  <!--<li><a href="editar-perfil.php"> <i class="fa fa-user-o" aria-hidden="true"></i>Editar perfil</a></li>-->
  <li><a href="alterarsenha"> <i class="fa fa-key" aria-hidden="true"></i>Alterar senha</a></li>
  <li><a href="suporte"> <i class="fa fa-commenting" aria-hidden="true"></i>Suporte</a></li>
  

  

</div>