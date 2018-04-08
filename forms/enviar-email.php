<?php

    include_once 'PHPMailer/class.phpmailer.php';
    
    $Email = new PHPMailer();
    $Email->SetLanguage("br");
    $Email->IsSMTP(); // Habilita o SMTP 
    //$Email->SMTPAuth = true; //Ativa e-mail autenticado
    $Email->Host = 'mail.construshopping.com.br'; // Servidor de envio # verificar qual o host correto com a hospedagem as vezes fica como smtp.
    $Email->Port = '465'; // Porta de envio
    $Email->Username = 'contato@construshopping.com.br'; //e-mail que será autenticado
    $Email->Password = '53kmqydsxoB7@'; // senha do email
    // ativa o envio de e-mails em HTML, se false, desativa.
    $Email->IsHTML(true); 
    // email do remetente da mensagem
    $Email->From = 'contato@construshopping.com.br';
    // nome do remetente do email
    $Email->FromName = utf8_decode('ConstruShopping');
    // Endereço de destino do emaail, ou seja, pra onde você quer que a mensagem do formulário vá?
    //$Email->AddReplyTo($email, $nome);
    $Email->AddAddress($email_destinatario); // para quem será enviada a mensagem
    // informando no email, o assunto da mensagem
    $Email->Subject = $assunto;
    //$mail->AltBody = "Este é o corpo da mensagem de teste, em Texto Plano! \r\n :)";
    // Limpa os destinatários e os anexos
    $mail->ClearAllRecipients();
    $mail->ClearAttachments();
    // Define o texto da mensagem (aceita HTML)
    $Email->Body .= $mensagem;
    // verifica se está tudo ok com oa parametros acima, se nao, avisa do erro. Se sim, envia.
    if(!$Email->Send()){
        echo "<p>A mensagem não foi enviada. </p>";
        echo "Erro: " . $Email->ErrorInfo;
    }
?>