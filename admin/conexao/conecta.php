<?php
	try{
		$conexao = new PDO('mysql:host=localhost:8889;dbname=construshopping', 'root', 'root');
		$conexao ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}catch(PDOException $e){
		echo 'ERROR: ' . $e->getMessage();
	}
?>