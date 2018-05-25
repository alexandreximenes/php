<?php 
    include("../dao/produtoDAO.php");
    
    $nome = $_POST['nome'];
    $preco = floatval( $_POST['preco'] );
    
    //SIMULANDO DADOS INVALIDOS VINDO DO FRONT-END
    //TESTANDO VALIDAÇÃO NO SERVIDOR
    //$_POST = '';
    //$preco = 0;
    //$nome = 'ab';
    
    $msg = '';

    if(!empty($_POST)){
        if ($nome == '') {
            $msg .= 'Nome invalido! Nome: [' . $nome . '] ';
        }
        
        if(strlen($nome) < 3){
            $msg .= 'Voce não atingiu o numero de caracteres minimos [3] . Nome: [' . $nome . '] ';
        }

        if($preco == '' || $preco <= 0){
            $msg .= 'Preço invalido! Valor : [' . $preco . '] ';
        }

        if($msg == ''){
            
            $produto = new produto();

            $produto->setId((int) $_POST['id']);
            $produto->setNome($_POST['nome']);
            $produto->setPreco($_POST['preco']);
            
            $dao = new produtoDAO();
            
            $dao->salva($produto);
        }else{
            header('Content-Type: application/json');
            echo json_encode($msg);
            return;
        }
        
    }else{
        header('Content-Type: application/json');
		echo json_encode($msg);
        return;
    }