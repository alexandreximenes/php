<?php 
    include("dao/carroDAO.php");

    $carro = new Carro();
    
    $carro->setId((int) $_POST['id']);
    $carro->setNome($_POST['nome']);
    $carro->setPreco($_POST['preco']);
    
    $dao = new carroDAO();
    
    $dao->salva($carro);
