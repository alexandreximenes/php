function editaLinha() {
    event.preventDefault();

    let linha = $(this).closest('tr');
    let id = linha.find('td:nth-child(1)').text();
    let nome = linha.find("td:nth-child(2)").text();
    let preco = linha.find("td:nth-child(3)").text();
    
    editaProduto(id, nome, preco);
}

function editaProduto(id, nome, preco) {
    $('.id').val(id);
    $('.nome').val(nome);
    $('.preco').val(preco);
}