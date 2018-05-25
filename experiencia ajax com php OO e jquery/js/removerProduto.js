function removeLinha() {
    event.preventDefault();
    var linha = $(this).closest('tr');
    var id = linha.find('td:nth-child(1)').text();
    removeProduto(id);
    linha.fadeOut(300);
    setTimeout(function () {
        linha.remove();
    }, 300);
}

function removeProduto(id) {
    url = './remove-produto.php';
    $.post(url, { id: id })
        .done(function (data) {
            console.log("deletou " + data);
        })
        .fail(function (data) {
            console.log("falha " + data);
        });

}