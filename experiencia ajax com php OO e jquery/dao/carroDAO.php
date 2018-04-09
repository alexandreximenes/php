<?php 
include("model/carro.php");


class carroDAO{

	public function adiciona($carro){
		$conexao = mysqli_connect('localhost', 'root', '', 'loja');
		echo $query = "insert into produtos (nome, preco) values ('{$carro->getNome()}', {$carro->getPreco()});";
		
		echo mysqli_query($conexao, $query);

//		mysqli_close($conexao);
	}

	public function listarProdutos(){
		$produtos = array();

		$conexao = mysqli_connect("localhost", "root", "", "loja");
		$query = "SELECT * FROM produtos";
		
		$resultado = mysqli_query($conexao, $query);
		while($produto = mysqli_fetch_assoc($resultado)){
			array_push($produtos, $produto);
		}

		return $produtos;
	}

	public function listarProdutosJson(){
		header('Content-Type: application/json');
		$produtos = $this->listarProdutos();
		return json_encode($produtos);
	}
}