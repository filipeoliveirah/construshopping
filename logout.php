<?php
	session_start();
	unset($_SESSION['email']);	
	unset($_SESSION['usuarioIsCliente']);
	header("Location: index");
?>