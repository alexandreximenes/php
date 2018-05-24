<?php include("./cabecalho.php"); ?>

        <div class="container">
            <div class="form-control" class="principal">
                <h1>Formulário de cadastro</h1>
                <form action="adiciona-produto.php">
                    <div class="row">
                        <div class="col-md-2 mb-3">Codigo: <input class="id form-control" type="text" name="id" disabled="disabled"/></div>
                        <div class="col-md-7 mb-3">Nome: <input class="nome form-control" type="text" name="nome" autofocus/></div>
                        <div  class="col-md-3 mb-3">Preço: <input class="preco form-control" type="number" name="preco" /></div>
                    </div>
                    <!-- <div>Bateria <meter  type="meter" min="0" max="100" low="15" value="12" />12 </div>
                    <div>Carregando<progress  type="progress" min="0" max="100" value="12" />12% </div>
                    <div>Carregando<input type="color" name="cor"/></div>
                    <div>Carregando<input type="search" name="busca"/></div> -->
                    </br>
                    <div><button class="salvar btn btn-success" type="submit"/>Salvar </button> 
                        <button id="button-ajax" class="btn btn-success" type="submit"/>Listar Produtos </button>
                    </div>
                    
                </form>
                <br/>
                
                <?php include("./tabela.php");?>

            </div>
        </div>

        <?php include("./rodape.php"); ?>
        
        <script>
            $(function(){
                buscarUltimosAdd();
            });
        </script>

        <script src="../js/editarProduto.js"></script>
        <script src="../js/salvarProduto.js"></script>
        <script src="../js/listarProdutos.js"></script>
        <script src="../js/removerProduto.js"></script>
        
    </body>

