let produto;

$(function(){
	$('#salvar').click(function(event){
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
	
	if(validaProduto(produto)){
		var url = "./salva-produto.php";
		$.post(url, produto)
			.done(resultado => {
				//alert(resultado);
				produto.id = resultado;
				let linhaTr = criaTr(produto);
				
				//$("#table-produto tbody").prepend(linhaTr);	
				buscarUltimosAdd();
			})
			.fail(resultado => alert(resultado));
	}else{
		$(".nome").focus();
		alert('Preencha os campos do produto');
		return;
	}


}

function validaProduto(produto){
	if (produto.nome != '' && produto.preco != '' && produto.nome.length > 3 && produto.preco.length > 0){
		return true;
	}
	return false;
}