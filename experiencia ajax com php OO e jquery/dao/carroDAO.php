<?php 
include("model/carro.php");

class carroDAO{
	
	public function adiciona($carro){
		$conexao = mysqli_connect('localhost', 'root', '', 'loja');	
		$query = "INSERT INTO produtos 
			(
				nome, 
				preco
			)
			VALUES
			(
				'{$carro->getNome()}', 
				{$carro->getPreco()}
			)";

		mysqli_query($conexao, $query);
	}

	public function listarProdutos(){
		$conexao = mysqli_connect('localhost', 'root', '', 'loja');
		$produtos = array();
		
		$query = "SELECT 
							id,
							nome, 
							preco
					FROM
							produtos";
							
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

	public function remove($carro){
		
		$conexao = mysqli_connect('localhost', 'root', '', 'loja');	
		$query = "DELETE 
					FROM produtos 
				WHERE 
					id= {$carro->getId()}";
		
		mysqli_query($conexao, $query);
	}
}