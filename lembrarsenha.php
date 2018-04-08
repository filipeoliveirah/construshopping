<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>ConstruShopping | Cadastro</title>
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
          <h1 class="text-center">Lembrar minha senha</h1>
          <div class="resp">
          </div>
          <?php  
            if(isset($_POST['recuperar'])){
                include("conexao/conecta.php");
                $email    = utf8_decode (addslashes(strip_tags(trim($_POST['email']))));
                $assunto  = 'Recuperação de Senha - ConstruShopping';
              // verifica se o e-mail está no cadastrado no sistema
                $select = "SELECT * from cadastrocliente WHERE email='$email' ";              
              try{
                $result = $conexao->prepare($select);
                //$result->bindValue(':email', $email, PDO::PARAM_STR);
                $result->execute();
                $contar = $result->rowCount();
                if($contar>0){
                  foreach($conexao->query($select) as $exibe);
                  $nomeUser     = $exibe['nome'];
                  $emailUser    = $exibe['email'];
                  $usuarioUser  = $exibe['usuario'];
                  $senhaUser    = $exibe['senha'];
                  
                require_once('admin/envia-email/PHPMailer/class.phpmailer.php');
                
                $Email = new PHPMailer();
                $Email->SetLanguage("br");
                $Email->IsSMTP(); // Habilita o SMTP 
                $Email->SMTPAuth = true; //Ativa e-mail autenticado
                $Email->Host = 'mail.construshopping.com.br'; // Servidor de envio # verificar qual o host correto com a hospedagem as vezes fica como smtp.
                $Email->Port = '587'; // Porta de envio - verificar com o servidor
                $Email->Username = 'noreply@construshopping.com.br'; //e-mail que será autenticado
                $Email->Password = 'cshop@2017'; // senha do email
                // ativa o envio de e-mails em HTML, se false, desativa.
                $Email->IsHTML(true); 
                // email do remetente da mensagem
                $Email->From = 'suporte@construshopping.com.br';
                // nome do remetente do email
                $Email->FromName = utf8_decode($email);
                // Endereço de destino do emaail, ou seja, pra onde você quer que a mensagem do formulário vá?
                $Email->AddReplyTo($email, 'ConstruShopping');
                $Email->AddAddress($email); // para quem será enviada a mensagem
                // informando no email, o assunto da mensagem
                $Email->Subject = utf8_decode($assunto);
                // Define o texto da mensagem (aceita HTML)
                $Email->Body .= "Seguem os dados para acesso ao Gerenciador do Sistema de Postagem com PHP:<br /><br />
                         <strong>Nome:</strong> $nomeUser<br />
                         <strong>Email:</strong> $emailUser<br />
                         <strong>Usu&aacute;rio:</strong> $usuarioUser<br />
                         <strong>Senha:</strong> $senhaUser<br /><br />                           
                         <strong>Obs:</strong> Voc&ecirc; n&atilde;o precisa responder &agrave; este e-mail";
                // verifica se está tudo ok com oa parametros acima, se nao, avisa do erro. Se sim, envia.
                if(!$Email->Send()){
                  echo '<div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>Erro ao enviar!</strong> Houve um problema ao recuperar sua senha, contate o administrador.
                          </div>';
                  echo "Erro: " . $Email->ErrorInfo;
                }else{
                  echo '<div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>Sucesso!</strong> Uma mensagem com as informações de acesso foi enviada p/ o e-mail informado.
                          </div>';
                } 
                }else{
                  echo '<div class="alert alert-danger">
                          <button type="button" class="close" data-dismiss="alert">×</button>
                          <strong>Erro ao recuperar!</strong> O e-mail digitado não consta cadastrado em nosso sistema.
                        </div>';
                }     
              }catch(PDOException $e){
                echo $e;
              } 
            }// se clicar
          ?>  
          <form id="formulario" method="POST" enctype="multipart/form-data" name="formulario">
            <div class="form-group">                     
              <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu email" required/>
              <input type="submit" class="button btn btn-primary btn-large" name="recuperar" value="Recuperar Senha">                 
            </div>          
          </form>
          <p>* Seus dados serão guardados de forma segura.</p>
        </div>
      </div>
      
    </div>
    <?php include("incs/links-uteis.php");?>
    <?php include("incs/footer-menu.php");?>
    <?php include('incs/footer.php');?>
  </body>
</html>