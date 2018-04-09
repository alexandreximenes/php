$(function(){
    $("#table-produto").hide();
    $('#button-ajax').click(function(event){
        event.preventDefault();
        buscarDadosNoServidor();
    });  
 }); 

function buscarDadosNoServidor(){
    var url = "./listaTodosProdutos.php";
    $.get(url, function(data){
        $("#table-produto").show();
        $.each(data, function(i, produto){
            $("#table-produto tbody").append(
                "<tr>"+
                    "<td>"+ produto.id + "</td>"+
                    "<td>" + produto.nome +"</td>"+
                    "<td>"+ produto.preco +"</td>"+
                "</tr>"
            );
        })

    });
                    // $(".dados").append(produto.id +" - "+ produto.nome + " "+produto.preco+ "</br>");
            
                    // for(var i = 0;i < data.length; i++){
                    //     $(".dados").append(data[i].id +" "+ data[i].nome + " "+data[i].preco+ "</br>");
                        
                    // }
         
                // $.ajax({
                //     url,
                //     method: "GET",
                //     dataType: "json"
                // }).done(function(data){
                //     $.each(data, function(i, produto){
                //         console.log(produto.nome);
                //         $('').html(data.id);
                //     });
                // }).fail(function(){
                //     console.log("falhou");
                // });
            }
               
        
        