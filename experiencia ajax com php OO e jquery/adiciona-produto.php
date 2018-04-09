<?php 
	include("menu.php");
	include("dao/carroDAO.php"); 
	  


	$carro = new Carro();
    $carro->setNome($_POST['nome']);
    $carro->setPreco($_POST['preco']);

    $carroDAO = new carroDAO();
    if($carroDAO->adiciona($carro)) : 
        return json_encode("sucess");
    ?>

<!--   	<p class="alert-success">
        Produto <?= $carro->getNome(); ?>, <?= $carro->getPreco(); ?> adicionado com sucesso!
		</p>
 -->    <?php else :
        return json_encode("fail");
    ?>
<!--     	<p class="alert-danger">
        	Produto <?= $carro->getNome(); ?> não foi adicionado!
 		</p>
 -->
    <?php endif;

    // $listaDeProdutos = $carroDAO->listarProdutos();

    // echo $listaDeProdutos; 

 	//$listaDeProdutos = json_decode($listaDeProdutos, true);

  
	// foreach ($listaDeProdutos as $p) {
	// 	echo "<br>" . $p['id'] . " - " . $p['nome'];
	// }

?>
