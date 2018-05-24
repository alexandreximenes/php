$(function(){
    $("#table-produto").hide();
    $('#button-ajax').click(function(event){
        event.preventDefault();
        buscarDadosNoServidor();
    });  
 }); 

let linha;
let url;
let corpoTabela = $("#table-produto tbody");

function buscarDadosNoServidor(){
    url = "./listaTodosProdutos.php";
    $.get(url, function(data){
        console.log(data);
        mostraTabela();
        data.map(produto => {
            corpoTabela.append(criaTr(produto));
        });
    });
}

function buscarUltimosAdd(){
    url = "./buscarUltimosAdd.php";
    $.get(url, function(resp){
        console.log(resp);
        mostraTabela();
        resp.map(produto => {
            corpoTabela.append(criaTr(produto));
        });
    });
}

function mostraTabela(){
    $("#table-produto").show();
    corpoTabela.html('');
}

function criaTr(produto){

    let linha = $('<tr>');
        var tdId = $('<td>').addClass('produto-id').text(produto.id);
        var tdNome = $("<td>").text(produto.nome);
        var tdPreco = $("<td>").text(produto.preco);
        var colunaAcao = $('<td>');
        var linkRemover = $('<a>').addClass('remover-produto').attr('href', '#').text('remover');
        var linkEditar = $('<a>').addClass('editar-produto').attr('href', '#').text('editar');

        colunaAcao.append(linkRemover);
        colunaAcao.append(" | ");
        colunaAcao.append(linkEditar);

        linha.append(tdId);
        linha.append(tdNome);
        linha.append(tdPreco);
        linha.append(colunaAcao);

        linha.find('.remover-produto').click(removeLinha);
        linha.find(".editar-produto").click(editaLinha);
    
    return linha;
}
               
        
        