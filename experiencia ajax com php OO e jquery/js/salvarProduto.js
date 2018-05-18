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

	var produto = {
		id: vId,
		nome: vNome,
		preco: vPreco
	};
	//console.log(produto);

	var url = "salva-produto.php";
	$.post(url, produto)
		.done(resultado => alert(resultado))
		.fail(resultado => alert(resultado));

}