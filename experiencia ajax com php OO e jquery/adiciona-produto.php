<?php 
    include("dao/carroDAO.php");

    $carro = new Carro();

    $carro->setNome($_POST['nome']);
    $carro->setPreco($_POST['preco']);
    
    $dao = new carroDAO();
    
    if($dao->adiciona($carro)):
        return json_encode('sucesso');
    else:
        return json_encode('falha');
    endif;
