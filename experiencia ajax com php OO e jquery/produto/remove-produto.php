<?php 
    include("../dao/produtoDAO.php");

    $produto = new produto();
    $produto->setId( (int) $_POST['id'] );
    $dao = new produtoDAO();
    
    $dao->remove($produto);
