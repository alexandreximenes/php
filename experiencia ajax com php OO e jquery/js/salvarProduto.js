let produto;
let msg = [];

$(function(){
	$('#salvar').click(function(event){
		event.preventDefault();
		salvaProduto();
		msg = [];
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
		msg = [];
		var url = "./salva-produto.php";
		$.post(url, produto)
			.done(resultado => {
				
				if(!parseInt(resultado)){
					msg.push(resultado);
					mensagem(msg, 'erro');
				}else{
					produto.id = resultado;
					let linhaTr = criaTr(produto);
					msg.push(vNome.toUpperCase() + " salvo com sucesso");

					buscarUltimosAdd();
					mensagem(msg, 'sucesso');
					limparCampos();
				}


				//$("#table-produto tbody").prepend(linhaTr);	
			})
			.fail(resultado => mensagem(msg.push(resultado)) );
	}else{
		mensagem(msg, 'erro');
		return;
	}
}

function limparCampos(){
	$('.id').val('');
	$('.nome').val('');
	$('.preco').val('');
	$('.nome').focus();
}
function validaProduto(produto){
	if (produto.nome == '') {
		msg.push('Nome invalido! \nNome: [ ' +produto.nome+ ' ] \n');
		
	}

	if (produto.nome.length < 3){
		msg.push('Nome [ ' + produto.nome + ' ] não atingiu o numero minimo de caracteres! (3) \nCaracteres : [ ' + produto.nome.length + ' ]\n');
		$(".nome").focus();
	}
	
	if (produto.preco == "" || produto.preco <= 0) {
		msg.push("Preço invalido! \nPreço: [ " + produto.preco + " ] \n");
		$(".preco").focus();
  	}
	
	if (msg.length >= 3) $(".nome").focus();
	if(msg.length > 0) return false;

	return true;
}