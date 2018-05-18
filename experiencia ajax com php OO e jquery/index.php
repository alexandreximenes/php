<?php include("cabecalho.php"); ?>

    <body>
        <?php include("menu.php"); ?>
        
        <div class="container">
            <div class="form-control" class="principal">
                <h1>Formulário de cadastro</h1>
                <form action="adiciona-produto.php">
                    <div>Nome: <input class="nome form-control" type="text" name="nome" /></div>
                    <div>Preço: <input class="preco form-control" type="number" name="preco" /></div>
                    <!-- <div>Bateria <meter  type="meter" min="0" max="100" low="15" value="12" />12 </div>
                    <div>Carregando<progress  type="progress" min="0" max="100" value="12" />12% </div>
                    <div>Carregando<input type="color" name="cor"/></div>
                    <div>Carregando<input type="search" name="busca"/></div> -->
                    </br>
                    <div><button class="cadastrar btn btn-success" type="submit"/>Cadastrar </button> 
                        <button id="button-ajax" class="btn btn-success" type="submit"/>Listar Produtos </button>
                    </div>
                    
                </form>
                <div>
                    <table id="table-produto" class="table">
                        <thead>
                            <th>CODIGO</th>
                            <th>PRODUTO</th>
                            <th>PRECO</th>
                            <th>AÇÕES</th>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>

        <script src="js/jquery-3.3.1.js"></script>
        <script src="js/adicionaProduto.js"></script>
        <script src="js/listarProdutos.js"></script>
        <script src="js/removerProduto.js"></script>
        
    </body>

<?php include("rodape.php"); ?>
