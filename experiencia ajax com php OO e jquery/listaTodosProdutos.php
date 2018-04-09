<?php include("dao/carroDAO.php");

$carroDAO = new carroDAO();

$produtos = $carroDAO->listarProdutosJson();

echo $produtos;

// $produtosLista = json_decode($carroDAO->listarProdutosJson(), true);

// foreach($produtosLista as $produto):
// 	echo "(" . $produto['id'] . ") - " . $produto['nome'] . " - " . $produto['preco'];
// endforeach;

//$produtos = json_decode($carroDAO->produtosr(), true);

// echo json_encode($produtos);

// // var_dump($produtos);

// // die();

