<?php include("includes/header.php");?>
</head>
<body>
<?php include("includes/topo.php");?>



<?php
	if(isset($_GET['acao'])){
		$acao = $_GET['acao'];	
		
		if($acao=='welcome'){include("pages/inicio.php");}	
		
		// cadastro
		if($acao=='cad-postagem'){include("pages/cad-postagem.php");}	
		
		// exibicao
		if($acao=='ver-postagens'){include("pages/ver-postagens.php");}		
		if($acao=='ver-tickets'){include("pages/ver-tickets.php");}		
		if($acao=='ver-estatisticas'){include("pages/ver-estatisticas.php");}
		
		// edicao
		if($acao=='editar-postagem'){include("pages/edt-postagem.php");}
		if($acao=='editar-ticket'){include("pages/edt-ticket.php");}

		
	}else{
		include("pages/inicio.php");
	}

?>




<?php include("includes/footer.php");?>
</body>
</html>
