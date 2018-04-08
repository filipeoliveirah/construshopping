<?php
  
  include_once "conexao.php";

  class conecta extends config{    
    var $pdo;
    function __construct(){
      $this->pdo = new PDO('mysql:host='.$this->host.';dbname='.$this->db, $this->usuario, $this->senha); 
    }
    function salvarVenda($fk_id_construcash, $fk_id_cadastrofornecedor, $fk_id_status_pedido){
      $stmt = $this->pdo->prepare("INSERT INTO venda (fk_id_construcash, fk_id_cadastrofornecedor, fk_id_status_pedido)
      VALUES (:fk_id_construcash, :fk_id_cadastrofornecedor, :fk_id_status_pedido)");     
    		
      $stmt->bindValue(":fk_id_construcash",$fk_id_construcash);
      $stmt->bindValue(":fk_id_cadastrofornecedor",$fk_id_cadastrofornecedor);
      $stmt->bindValue(":fk_id_status_pedido",$fk_id_status_pedido);
      $run = $stmt->execute();      
    }

        
    function consultarVenda($reference){        
      $stmt = $this->pdo->prepare("SELECT * FROM venda WHERE idvenda = :reference");
      $stmt->bindValue(":reference", $reference);
      $run = $stmt->execute();
      $rs = $stmt->fetch(PDO::FETCH_ASSOC);
      return $rs;
    }

    function atualizarVenda($reference, $status){
      $stmt = $this->pdo->prepare("UPDATE venda SET status = :status WHERE id_venda = :reference");
      $stmt->bindValue(":reference", $reference);
      $stmt->bindValue(":status", $status);
      $run = $stmt->execute();
    }

    function consultarUltimaVenda(){
      $stmt = $this->pdo->prepare("SELECT * FROM venda INNER JOIN construcashs 
      ON venda.fk_id_construcash = construcashs.id_construcash
      ORDER BY venda.id_venda DESC");
      $run = $stmt->execute();
      $rs = $stmt->fetch(PDO::FETCH_ASSOC);
      return $rs;       
    }

    function atualizarConstrucash($id_fornecedor, $valor_compra){
      $stmt = $this->pdo->prepare("UPDATE cadastrofornecedor WHERE id_cadastrofornecedor = :id_fornecedor SET construcash = :valor_compra");
      $stmt->bindValue(":id_fornecedor", $id_fornecedor);
      $stmt->bindValue(":valor_construcash", $valor_compra);
      $stmt->execute();
    }

    function consultarConstrucash($cliente_id_logado){
      $stmt = $this->pdo->prepare("SELECT construcash FROM cadastrofornecedor WHERE id_cadastrofornecedor = :cliente_id_logado");
      $stmt->bindValue(":cliente_id_logado", $cliente_id_logado);
      $stmt->execute();
      $dadosCliente = $stmt->fetch(PDO::FETCH_ASSOC);
      return $dadosCliente;
    }

    function debitarConstrucash($construcash, $id_cadastrofornecedor){
      $stmt = $this->pdo->prepare("UPDATE `construshopping`.`cadastrofornecedor` SET `construcash` = :construcash
      WHERE `cadastrofornecedor`.`id_cadastrofornecedor` = :id_cadastrofornecedor");      
      $stmt->bindValue(":construcash", $construcash);
      $stmt->bindValue(":id_cadastrofornecedor", $id_cadastrofornecedor);
      $stmt->execute();
    }

    function listarOrcamento(){
      $stmt = $this->pdo->prepare("SELECT * FROM orcamento INNER JOIN cadastrocliente 
      ON cadastrocliente.id_cadastro_cliente = orcamento.fk_id_cadastro_cliente 
      WHERE orcamento.status = 'Aguardando' ");        
      $stmt->execute();
      $contar = $stmt->rowCount();
      return $contar;
    }

    function dadosCliente($cliente_id_logado){
      $stmt = $this->pdo->prepare("SELECT * FROM cadastrofornecedor WHERE id_cadastrofornecedor = :cliente_id_logado");
      $stmt->bindValue(":cliente_id_logado", $cliente_id_logado);
      $stmt->execute();
      $dadosCliente = $stmt->fetch(PDO::FETCH_ASSOC);
      return $dadosCliente;
    }
    function dadosFornecedor($cliente_id_logado){
      $stmt = $this->pdo->prepare("SELECT * FROM cadastrofornecedor WHERE id_cadastrofornecedor = :cliente_id_logado");
      $stmt->bindValue(":cliente_id_logado", $cliente_id_logado);
      $stmt->execute();
      $dadosCliente = $stmt->fetch(PDO::FETCH_ASSOC);
      return $dadosFornecedor;
    }  

    function criarTicket($fk_id_cadastro_cliente, $mensagem_cliente, $assunto){
      $stmt = $this->pdo->prepare("SELECT * FROM ticket ORDER BY id_ticket DESC");
      $stmt->execute();
      $selecionarTicket = $stmt->fetch(PDO::FETCH_ASSOC);
      $id_ticket = (int)$selecionarTicket['id_ticket'] + 1;
      
      $criar = $this->pdo->prepare("INSERT INTO ticket(id_ticket, assunto, status) VALUES
      (:id_ticket, :assunto, :status)");

      $criar->bindValue(":id_ticket", $id_ticket);
      $criar->bindValue(":assunto", $assunto);
      $criar->bindValue(":status", "aberto");
      
      $enviar = $this->pdo->prepare("INSERT INTO ticket_enviado_cliente(fk_id_cadastro_cliente, fk_id_ticket, mensagem_cliente)
      VALUES(:fk_id_cadastro_cliente,:fk_id_ticket,:mensagem_cliente)");
      $enviar->bindValue(":fk_id_cadastro_cliente", $fk_id_cadastro_cliente);
      $enviar->bindValue(":fk_id_ticket", $id_ticket);
      $enviar->bindValue(":mensagem_cliente", $mensagem_cliente);           

      if($criar->execute() && $enviar->execute()):
        return true;
        exit();
      endif;
      return false;
    }

    function verRespostasOrcamento($idOrcamento){
      $stmt = $this->pdo->prepare("SELECT * FROM orcamento_respondido_fornecedor WHERE fk_id_orcamento = :idOrcamento");
      $stmt->bindValue(":idOrcamento",$idOrcamento);      
      $stmt->execute();
      $rs = $stmt->rowCount();
      return $rs;
    }

    function enviarEmail($email_destinatario, $assunto, $mensagem){
      include_once "forms/enviar-email.php";
    }
  }//FIM DA CLASSE CONECTA


  $minhaUrl = $_SERVER['SCRIPT_NAME'];
	// iniciar sessao identificando o cliente
  session_start();
  if(isset($_SESSION['email'])){
    $emailSessao =  $_SESSION['email'];    
  }
  elseif( 
    ($minhaUrl == "/construshopping/solicitar-orcamento.php") || 
    ($minhaUrl == "/construshopping/termos-de-uso.php") || ($minhaUrl == "/construshopping/perguntas-frequentes.php") || 
    ($minhaUrl == "/construshopping/politicas-de-privacidade.php") || ($minhaUrl == "/construshopping/contato.php")
    || ($minhaUrl == "/construshopping/solicitar-orcamento.php")){      
    header("Location: login.php");    
  }

  function limitarTexto($texto, $limite){
    $contar_texto = strlen($texto);
    if ( $contar_texto >= $limite ) {      
      $texto = substr($texto, 0, strrpos(substr($texto, 0, $limite), ' ')) . '...';
      return $texto;
    }
    else{
      return $texto;
    }
  }

?>