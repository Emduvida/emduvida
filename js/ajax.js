$(document).ready(function () {
    
    var carr = $('.carregando');
    var carrFundo = $('#carregando');
    var errmsg = $('.msg');
    var forms = $('form');
    var botao = $('.j_buttom');
    var urlPost = 'php/inserir.php';
    var opt = "";

    errmsg.hide();
    carrFundo.hide();
    carr.hide();


    botao.attr("type", "submit");

    forms.submit(function () {
        errmsg.fadeOut("fast");
        return false;
    });


    function carregando() {
        carrFundo.fadeIn("fast");
        carr.empty().html('<p class="load"><img src="js/482.GIF" class="loadImg" alt="Carregando..."/></p>').fadeIn("fast");
    }

    /*function fechaLoad(){
     setTimeout(function(){
     carr.fadeOut("fast");
     carrFundo.fadeOut("fast");
     },300)
     }
     
     */
    function fechaErro(tempo) {
        setTimeout(function () {
            errmsg.fadeOut("fast");
        }, tempo);
    }

    function Redirecionar(tempo) {
        setTimeout(function () {
            location.href = 'home';
        }, tempo);
    }


    function errosend() {
        carrFundo.hide();
        carr.hide();
        errmsg.empty().html('<p class="erro"><strong>Erro inesperado: </strong>Favor contate o admin!</p>').fadeIn("fast");
    }


    //GENERICAS

    function erroDados(mensagem) {
        carrFundo.hide();
        carr.hide();
        errmsg.empty().html('<p class="erro">' + mensagem + '</p>').fadeIn("fast");

    }

    function sucesso(mensagem) {
        carrFundo.hide();
        carr.hide();
        errmsg.empty().html('<p class="accept">' + mensagem + '</p>').fadeIn("fast");

    }

    $.ajaxSetup({
        url: urlPost,
        type: 'POST',
        beforeSend: carregando,
        error: errosend
    });



    //LOGIN INICIAL 

    var cad1 = $('form[name="cad1"]');
    cad1.submit(function () {
        var dados = $(this).serialize();
        var acao = "&acao=cad1";
        var sender = dados + acao;

        $.ajax({
            url: 'op/gerais.php',
            data: sender,
            success: function (resposta) {

                if (resposta === '1') {

                    erroDados("Seu email já esta cadastrado!");
                    fechaErro(2000);

                    return false;
                } else if (resposta === 2) {

                    erroDados("<strong>Erro ao fazer login: </strong> verifique os dados digitados");
                    fechaErro(2000);
                    return false;

                } else {
                   //alert(resposta);

                  location.href = "cadastro";


                }

                //sucesso('<pre>'+resposta+'</pre>');
            },
            complete: function () {



            }
        });
    });

    var cadUsuario = $('form[name="cadastroUsuario"]');
    cadUsuario.submit(function () {
        var dados = $(this).serialize();
        var acao = "&acao=cadUsuario";
        var sender = dados + acao;

        $.ajax({
            url: 'op/inserir.php',
            data: sender,
            success: function (resposta) {

                if (resposta === '1') {
                    erroDados("Seu CPF já esta sendo utilizado");
                    fechaErro(2000);
                } else if (resposta === '2') {
                    erroDados("Seu email já esta cadastrado!");
                    fechaErro(2000);
                } else if (resposta === '3') {
                    sucesso("Usuario cadastrado com sucesso!");
                    Redirecionar(1000);
                    fechaErro(1000);

                } else {
                    alert(resposta);
                }

                //sucesso('<pre>'+resposta+'</pre>');
            },
            complete: function () {

                //location.href='home';

            }
        });
    });




    //FIM DO LOGIN INICIAL

    //CADASTRO DE LOGIN'S
    /*
     var cadLogin = $('form[name="cadastroLogin"]');
     
     cadLogin.submit(function () {
     
     var dados = $(this).serialize();
     var acao = "&acao=cadLogin";
     var sender = dados + acao;
     $.ajax({
     data: sender,
     success: function (resposta) {
     
     if (resposta == 1) {
     
     erroDados("<strong>Erro ao cadastrar login: </strong> campos em branco");
     return false;
     } else if (resposta == 3) {
     
     
     location.href = 'dados.php?pag=4&acao=listar';
     
     } else{
     
     erroDados(resposta);
     
     }
     
     //sucesso('<pre>'+resposta+'</pre>');
     },
     complete: function () {
     
     
     }
     });
     });
     
     
     
     
     
     
     var alterarVenda = $('form[name="alterarStatusPedido"]');
     
     alterarVenda.change(function () {
     
     var dados = $(this).serialize();
     var acao = "&acao=alterStatusPed";
     var sender = dados + acao;
     $.ajax({
     data: sender,
     success: function (resposta) {
     
     if (resposta == 1) {
     
     erroDados("<strong>Erro ao cadastrar login: </strong> campos em branco");
     return false;
     } else if (resposta == 3) {
     
     
     location.href = 'dados.php?pag=4&acao=listar';
     
     } else {
     
     erroDados(resposta);
     
     }
     
     //sucesso('<pre>'+resposta+'</pre>');
     },
     complete: function () {
     
     
     }
     });
     
     });*/


});