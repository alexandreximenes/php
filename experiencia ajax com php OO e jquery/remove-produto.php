<?php 
    include("dao/carroDAO.php");

    $carro = new Carro();
    $carro->setId( (int) $_POST['id']) );
    $dao = new carroDAO();
    
    if($dao->remove($carro):
        return json_encode('sucesso');
    else:
        return json_encode('falha');
    endif;
