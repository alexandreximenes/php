 <?php 
    include("cabecalho.php");
    include("rodape.php"); 
?>

<div class="container">
    <div class="produtos">
        <h1>Produtos</h1>
        <?php include("tabela.php");?>
    </div>
    
</div>

<script src="js/listarProdutos.js"></script>
<script src="js/editarProduto.js"></script>
<script src="js/removerProduto.js"></script>
<script>
    $(function(){
        buscarDadosNoServidor();
    });
</script>