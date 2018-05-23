<?php 
include("model/produto.php");

class produtoDAO{
	
	public function salva($produto){
		$conexao = mysqli_connect('localhost', 'root', '', 'loja');	
		$query = '';
		
		if($produto->getId() == ''){
			$query = "INSERT INTO produtos 
				(
					nome, 
					preco
				)
				VALUES
				(
					'{$produto->getNome()}', 
					{$produto->getPreco()}
				)";
			mysqli_query($conexao, $query);
			echo mysqli_insert_id($conexao);
		}else{
			$query = "UPDATE produtos
						SET
							nome = '{$produto->getNome()}',
							preco = {$produto->getPreco()}
						WHERE
							id = {$produto->getId()}";
			mysqli_query($conexao, $query);
			echo $produto->getId();
		}
	}

	public function listarProdutos($quantidade = ''){
		$conexao = mysqli_connect('localhost', 'root', '', 'loja');
		$produtos = array();
		$limit = '';
		
		if($quantidade > 0){
			$limit = 'LIMIT ' .$quantidade;
		}
		$query = "SELECT 
							id,
							nome, 
							preco
					FROM
							produtos
					ORDER BY id
					DESC
					$limit";
			
			$resultado = mysqli_query($conexao, $query);

			while($produto = mysqli_fetch_assoc($resultado)){
				array_push($produtos, $produto);
		}

		//var_dump($query);

		return $produtos;
	}

	public function listarProdutosJson(){
		header('Content-Type: application/json');
		
		$produtos = $this->listarProdutos();
		
		return json_encode($produtos);

	}

	public function remove($produto){
		
		$conexao = mysqli_connect('localhost', 'root', '', 'loja');	
		$query = "DELETE 
					FROM produtos 
				WHERE 
					id= {$produto->getId()}";
		mysqli_query($conexao, $query);
	}

	public function listarUltimosAdd(){
		header('Content-Type: application/json');
		
		$produtos = $this->listarProdutos(5);
		
		return json_encode($produtos);

	}

}