$(function(){
    $("#table-produto").hide();
    $('#button-ajax').click(function(event){
        event.preventDefault();
        buscarDadosNoServidor();
    });  
 }); 
var linha;
function buscarDadosNoServidor(){
    var url = "./listaTodosProdutos.php";

    $.get(url, function(data){
        $("#table-produto").show();
        
        data.map(d => {
            linha = $('<tr>');
            var tdId = $('<td>').addClass('produto-id').text(d.id);
            var tdNome = $('<td>').text(d.nome);
            var tdPreco = $('<td>').text(d.preco);
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

            $("#table-produto tbody").append(linha);
        });
        
    });
}



function editaLinha() {
    event.preventDefault();
    var linha = $(this).parent().parent();

    linha.fadeOut(1000);
    setTimeout(function () {
        linha.remove();
    }, 1000);
}
               
        
        