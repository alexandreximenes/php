let produto;

$(function(){
	$('.salvar').click(function(event){
		event.preventDefault();
		salvaProduto();
	});
});

function salvaProduto(){
	var vId = $('.id').val();
	var vNome = $('.nome').val();
	var vPreco = $('.preco').val();

	produto = {
		id: vId,
		nome: vNome,
		preco: vPreco
	};
	
	

	var url = "salva-produto.php";
	$.post(url, produto)
		.done(resultado => {
			//alert(resultado);
			produto.id = resultado;
			let linhaTr = criaTr(produto);
			
			//$("#table-produto tbody").prepend(linhaTr);	
			buscarUltimosAdd();
		})
		.fail(resultado => alert(resultado));

}