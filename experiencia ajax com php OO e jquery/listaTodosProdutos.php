<?php include("dao/produtoDAO.php");

$dao = new produtoDAO();

$produtos = $dao->listarProdutosJson();

echo $produtos;

//var_dump($produtos);

// $produtosLista = json_decode($carroDAO->listarProdutosJson(), true);

// foreach($produtos as $produto):
// 	echo "(" . $produto['id'] . ") - " . $produto['nome'] . " - " . $produto['preco'];
// endforeach;

//$produtos = json_decode($carroDAO->produtos(), true);

// echo json_encode($produtos);


// // die();

