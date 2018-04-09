$(function(){
	$('.cadastrar').click(function(event){
		event.preventDefault();
		cadastrarProduto();
	});
});

function cadastrarProduto(){
	var vNome = $('.nome').val();
	var vPreco = $('.preco').val();
	var produto = {
		nome: vNome,
		preco: vPreco
	}
	var url = "adiciona-produto.php";
	$.post(url, produto)
	.done(function(data){
		alert("produto cadastrado com sucesso!");
	});
}