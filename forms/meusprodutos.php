<?php

//$pdo = new PDO('mysql:host=localhost:8889; dbname=meusprodutos', 'root', 'root');

$pdo = new PDO('mysql:host=localhost:8889; dbname=construshopping', 'root', 'root');

$color = $_GET['q'];

$resultado = $pdo->prepare("SELECT * FROM lista_de_produtos WHERE nome_produto LIKE '%$color%'");
$resultado->execute();
$datos = array();

while ($row = $resultado->fetch(PDO::FETCH_ASSOC)){
	$datos[] = utf8_encode($row['nome_produto']);
}

echo json_encode($datos);