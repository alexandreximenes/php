<?php 
    include("dao/carroDAO.php");

    $carro = new Carro();
    $carro->setId( (int) $_POST['id'] );
    $dao = new carroDAO();
    
    $dao->remove($carro);
