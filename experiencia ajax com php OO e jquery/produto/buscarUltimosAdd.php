<?php
include("../dao/produtoDAO.php");

$dao = new produtoDAO();

$produtos = $dao->listarUltimosAdd();

echo $produtos;
