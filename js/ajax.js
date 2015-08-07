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

    function Redirecionar(tempo, local) {
        setTimeout(function () {
            location.href = local;
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


//PREPARAÇÃO DO CADASTRO E ENVIO DE SESSOA PARA PAGINA DE CADASTRO


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


//CADASTRO DE USUARIOS UTILIZANDO AJAX

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
                    Redirecionar(1000, 'home');
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

    //FUNÇÃO PARA REALIZAÇÃO DE LOGIN DO USUARIO NA PAGINA INICIAL
    var login = $('form[name="frmLogin"]');

    login.submit(function () {

        var dados = $(this).serialize();
        var acao = "&acao=login";
        var sender = dados + acao;

        $.ajax({
            url: 'op/gerais.php',
            data: sender,
            success: function (resposta) {
                switch (resposta) {
                    case '1':
                        erroDados("Encontramos problemas com seu usuario, contato o administrador");
                        fechaErro(2000);
                        break;

                    case '2':
                        erroDados("Verifique os dados digitados e tente novamente");
                        fechaErro(2000);
                        break;

                    case '3':

                        sucesso("Seja bem vindo!");

                        Redirecionar(1000, 'home');

                        break;

                    default:

                        break;
                }

            },
            complete: function () {


            }
        });
    });

    var cadResenha = $('form[name="cadResenha"]');
    cadResenha.submit(function () {
        var dados = $(this).serialize();
        var acao = "&acao=cadResenha";
        var sender = dados + acao;

        $.ajax({
            url: 'op/inserir.php',
            data: sender,
            success: function (resposta) {

                switch (resposta) {
                    case '1':
                        break;

                    default :
                        alert(resposta);
                        break;
                }

            },
            complete: function () {



            }
        });
    });

    var produtos = $('.inputProd');
    produtos.keydown(function () {
        //alert("aaa");
        var dados = $(this).serialize();
        var acao = "&acao=pesquisarProd";
        var sender = dados + acao;

        $.ajax({
            url: 'op/pesquisar.php',
            data: sender,
            beforeSend: null,
            success: function (resposta) {

                switch (resposta) {
                    case '1':

                        break;

                    default :
                        if (resposta !== '2') {
                            $('#carregaBusca').html(resposta);
                            $('.j_busca').click(function () {
                                $('.COD_PRODUTO').val($(this).attr('id'));
                            });
                        } else {
                            $('#carregaBusca').text("Caso não encontre seu produto, pode prosseguir normalmente!")
                        }
                        break;
                }

            },
            complete: function () {



            }
        });
    });


});