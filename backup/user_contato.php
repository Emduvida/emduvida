<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>user/resenhas</title>
        <link rel="stylesheet" type="text/css" href="css_robinho.css">            
            
    </head>
    <body>
                        
        <?php include_once 'header.php' ?>
                       
        <section id="conteudo_usuario">
             
            <p class="titulo_user"> Área de Gerenciamento de conta </p>
                        
                <p class="nome_user"> Você está logado como, NOME DO USUÁRIO </p>
            
            <article id="icone_user">
                     
                <img src="../img/img_user.jpg" alt="foto de perfil " class="img_perfil"/>
           
            </article>
                
           
            <p class="txt_perfil"> <a href=""> Carregar  | </a>  <a href="">Remover Foto </a></p>
            
          
            
            <nav id="menuUsuario">
                <ul class="menudousuario">  <p class="txt_menu"> Menu </p>
                    <li><a href="user_perfil.php">  Perfil </a> </li> <br/> <br/> <br/>
                    <li><a href="user_resenhas.php">  Minhas Resenhas </a> </li> <br/> <br/> <br/>
                    <li><a href="">  Criar Resenha </a> </li> <br/> <br/> <br/>
                    <li><a href="user_contato.php">  Entrar em contato com Administrador </a> </li> <br/> <br/> <br/>
                     <li><a href="">  Excluir conta </a> </li> <br/> <br/> <br/>
                </ul>
            </nav>
             
   <form id="contato">
            
       <fieldset> <legend>Entre em contato conosco</legend><br/><br/> <br/><br/>
           <label>Nome:   </label><input class="campo_nome" type="text"><br/><br/>
           <label>Email:   </label><input class="campo_email" type="password"><br/><br/>
            <label>Mensagem:   </label><br><textarea class="msg" cols="35" rows="8">
                
            </textarea><br/><br/> <input class="btn_submit" type="submit" value="Enviar"> 
            
            </fieldset>


           
    
</form>

                
           
        </section>
        
           <?php include_once 'footer.php' ?>
    </body>
</html>

