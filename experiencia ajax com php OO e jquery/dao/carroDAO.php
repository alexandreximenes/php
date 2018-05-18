<?php 
include("model/carro.php");

class carroDAO{
	
	public function salva($carro){
		$conexao = mysqli_connect('localhost', 'root', '', 'loja');	
		$query = '';
		
		if($carro->getId() == ''){
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
				echo "Produto cadastrado com sucesso";
		}else{
			$query = "UPDATE produtos
						SET
							nome = '{$carro->getNome()}',
							preco = {$carro->getPreco()}
						WHERE
							id = {$carro->getId()}";
			echo "Produto atualizado com sucesso!";
		}

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