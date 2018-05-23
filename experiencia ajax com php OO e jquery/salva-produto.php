<?php 
    include("dao/produtoDAO.php");

    $produto = new produto();
    
    $produto->setId((int) $_POST['id']);
    $produto->setNome($_POST['nome']);
    $produto->setPreco($_POST['preco']);
    
    $dao = new produtoDAO();
    
    $dao->salva($produto);
