<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/estilo_header.css"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    </head>
    <body>
        <section id="todo">

            <?php include_once 'header.php'; ?>



            <section id="area_gal">

                <section id="galeria" >
                    <img src="imagens/imagens_resenha/Video-Game-Nintendo-31879.jpg" class="img">

                </section>



                <section id="inscrever">
                    <script>

                        $(document).ready(function () {

                            $('#precadastro').validate(
                                    {
                                        rules: {
                                            EMAIL_USUARIO: {
                                                required: true,
                                                maxlength: 50
                                            },
                                            SENHA_USUARIO: {
                                                required: true,
                                                maxlength: 18
                                            }

                                        },
                                        messages: {
                                            EMAIL_USUARIO: {
                                                required: "Campo obrigatório",
                                                email: "digite um email valido"
                                            },
                                            SENHA_USUARIO: {
                                                required: "Campo obrigatório"
                                            }

                                        }
                                    }
                            );



                            $('#precadastro').change(function () {
                                senha = $('.senha').val();
                                confsenha = $('.confSenha').val();
                                email = $('.email').val();
                                confEmail = $('.confemail').val();
                                if (senha != confsenha) {
                                    $('#erroMail').text('Os emails digitados devem ser iguais');
                                    return false;
                                }

                            });

                        });
                    </script>

                    <p id="texto_cadastro">
                        Cadastre-se em</br> nosso Site 
                    </p>

                    <form id="precadastro" action="cadastro_usuario.php" method="post">



                        <label>
                            Email:
                            <input type="email" class="EMAIL_USUARIO email"  name="EMAIL_USUARIO" placeholder="exemplo@mail.com" id="form_cadastro_inical"  >
                        </label>
                        <span style="color: red;" id="erroMail"></span>
                        <label>
                            Confirmar Email:
                            <input type="email" class="EMAIL_USUARIO confemail"  name="EMAIL_USUARIO"  id="form_cadastro_inical"  >
                        </label>
                        <span style="color: red;" id="erroMail"></span>
                        <label>
                            Senha:
                            <input type="password" class="SENHA_USUARIO senha"  name="SENHA_USUARIO" placeholder="*********" id="form_cadastro_inical">
                        </label>
                        <span style="color: red;" id="erroSenha"></span>
                        <label>
                            Confirmar Senha:
                            <input type="password" class="SENHA_USUARIO confSenha" name="SENHA_USUARIO" id="confirmarsenha">
                        </label>
                        <span style="color: red;" id="erroSenha"></span>                        
                        <input type="submit"    value="Prosseguir" id="enviar">

                    </form>

                    <section id="login_alternativo">
                        <p id="texto_fb"> Entrar com o facebook</p>

                    </section>

                </section>

            </section>

            <aside id="publicidade">

            </aside>

            <section id="conteudo">

                <div class="Placa">
                    <div id="texto1">Maiores</div> 
                    <div id="texto2">Notas</div>
                </div>
            </section>

            <section class="resenhas">

                <div   id="resenha_1">  
                    <img src="imagens/imagens_resenha/Hotel.jpg" class ="img">
                </div>

                <div   id="resenha_2">  
                    <img src="imagens/imagens_resenha/Food-Meat-1505.jpg"class="img">
                </div>

                <div  id="resenha_3"> 
                    <img src="imagens/imagens_resenha/PH00515.jpg" class="img"> 
                </div>

                <div  id="resenha_4">  
                    <img src="imagens/imagens_resenha/Video-Game-Left-4-Dead-67016.jpg" class="img" >
                </div>

            </section>        


            <div class="Placa">
                <div id="texto3">Menores</div> 
                <div id="texto4">Notas</div>
            </div>

            <section class="resenhas">

                <div  id="resenha_5" > 
                    <img src="imagens/imagens_resenha/PH00640.jpg" class="img">
                </div>

                <div id="resenha_6" >  
                    <img src="imagens/imagens_resenha/PH00486.jpg"class="img" >
                </div>

                <div id="resenha_7" >  
                    <img src="imagens/imagens_resenha/Movie-Avatar-76147.jpg" class="img">
                </div>

                <div   id="resenha_8">  
                    <img src="imagens/imagens_resenha/Artistic-Drawing-4356.jpg"class="img">
                </div>

            </section>



            <?php include_once 'footer.php' ?>
        </section>
    </body>
</html>

