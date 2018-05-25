function mensagem(msg, tipo) {
    
    let mensagem_body = $(".mensagem-body");
    $(".alert-heading").text("Atenção");
    let mensagem_footer = $('.mensagem-footer');
    
    if(tipo == 'sucesso'){ 
        $(".alert").removeClass("alert-danger");
        $(".alert").addClass('alert-success');
        $(mensagem_footer).text("Produto salvo com sucesso");
    }else{
        $(".alert").removeClass("alert-success");
        $(".alert").addClass("alert-danger");
        $(mensagem_footer).text("Preencha os campos corretamente");
    }
    
    $(".alert").stop().slideDown(300);
    
    $(mensagem_body).text(" ");
    
    if(msg.length>0){
        msg.forEach(e => $(mensagem_body).append(e + '<br>'));
    }
       
    setTimeout(function () {
        $(".alert").stop().slideUp();
    }, 5000);

    $(".close").click(function(){
        $(".alert").stop().slideUp();
    });
}