<?php include_once 'config.php';?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>ConstruShopping | Cadastro Fornecedor</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <meta property="og:title" content="">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="ConstruShopping">
    <meta property="og:description" content="">

    <link href="css/formsteps.css" rel="stylesheet" type="text/css">
    <?php include('incs/head.php');?>
  </head>

  <body>
    <?php include("incs/top-menu.php");?>
    <?php include("incs/menu.php");?>
    <div class="container meupainel solicite-orcamento-bg">
      <div class="row col-md-12">
        <div class="center-block">
          <div class="container">
            <h1 class="text-center">Cadastro de fornecedor</h1>          
            <p class="text-center">Com cadastro de fornecedor sua empresa poderá se condidatar a orçamentos de clientes, além de fazer comentários na plataforma, abrir tickets e muito mais!</p>
          </div>
          <div class="resp">
          </div>
          <form id="formulario" method="post" enctype="multipart/form-data" name="formulario">
            <ul id="progress">
              <li class="ativo">Passo 1</li>
              <li>Passo 2</li>
              <li>Passo 3</li>
            </ul>
            <fieldset>
              <h2>Dados da empresa</h2>
              <input type="text" name="nomefantasia" placeholder="Nome Fantasia*"/>
              <input type="text" name="razaosocial" placeholder="Razão Social*"/>
              <input type="text" name="cnpj" placeholder="CNPJ*"/>              
              <input type="text" name="telefonefixo" placeholder="Telefone Fixo"/>
              <input type="text" name="telefonecelular" placeholder="Telefone Celular*"/>
              <select class="form-control" name="porteempresa">                        
                <option value="">Qual porte da sua empresa?*</option>                    
                <option value="1">MEI</option>
                <option value="2">ME</option>
                <option value="3">Pequeno Porte</option>
                <option value="4">Médio Porte</option>
                <option value="5">Grande Porte</option>
              </select>
              <p>*Itens obrigatórios</p>
              <input type="button" name="next1" class="next1 acao" value="Próximo"/>              
              
            </fieldset>

            <fieldset>
              <h2>Onde sua empresa fica?</h2>
              <input type="text" name="cep" placeholder="CEP*"/>
              <input type="text" name="rua" placeholder="Rua*"/>              
              <input type="text" name="numero" placeholder="Número*"/>
              <input type="text" name="bairro" placeholder="Bairro*"/>              
              <input type="text" name="cidade" placeholder="Cidade*"/>
              <select class="form-control" name="estado">
                <option value="">Selecione um estado</option>
                <option value="AC">Acre</option>
                <option value="AL">Alagoas</option>
                <option value="AP">Amapá</option>
                <option value="AM">Amazonas</option>
                <option value="BA">Bahia</option>
                <option value="CE">Ceará</option>
                <option value="DF">Distrito Federal</option>
                <option value="ES">Espírito Santo</option>
                <option value="GO">Goiás</option>
                <option value="MA">Maranhão</option>
                <option value="MT">Mato Grosso</option>
                <option value="MS">Mato Grosso do Sul</option>
                <option value="MG">Minas Gerais</option>
                <option value="PA">Pará</option>
                <option value="PB">Paraíba</option>
                <option value="PR">Paraná</option>
                <option value="PE">Pernambuco</option>
                <option value="PI">Piauí</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="RN">Rio Grande do Norte</option>
                <option value="RS">Rio Grande do Sul</option>
                <option value="RO">Rondônia</option>
                <option value="RR">Roraima</option>
                <option value="SC">Santa Catarina</option>
                <option value="SP">São Paulo</option>
                <option value="SE">Sergipe</option>
                <option value="TO">Tocantins</option>
              </select>              
              <!--<input type="text" name="estado" placeholder="Estado*"/>-->              
              <input type="text" name="complemento" placeholder="Complemento*"/>
              <p>*Itens obrigatórios</p>
              <input type="button" name="prev" class="prev acao" value="Anterior"/>
              <input type="button" name="next2" class="next acao" value="Próximo"/>
            </fieldset>

            <fieldset>
              <h2>Dados de acesso</h2>             
              <input type="text" name="usuario" placeholder="Usuário*"/>
              <input type="text" name="email" placeholder="Email*"/>
              <input type="password" name="senha" placeholder="Senha*"/>              
              <input type="password" name="csenha" placeholder="Confirme sua senha*"/>              
              <select class="form-control" name="site">                        
                <option value="">Possui site?*</option>                    
                <option value="nao">Sim</option>
                <option value="sim">Não</option>>
              </select>
              <p>*Itens obrigatórios</p>
              <input type="button" name="prev" class="prev acao" value="Anterior"/>
              <input type="submit" name="next" class="acao" value="Enviar"/>
            </fieldset>
          </form>
        </div>
      </div>      
    </div>
    <?php include("incs/links-uteis.php");?>
    <?php include("incs/footer-menu.php");?>
    <?php include('incs/footer.php');?>

    <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="js/cadastrofornecedor.js"></script>
  </body>
</html>