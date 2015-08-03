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
        
       
             
             
            <form id="cadastro" action="op/inserir.php" method="post">   
                
                
                    
                    <legend class="legendform">Dados Pessoais</legend> 
                    <fieldset class="fieldsetformu"> 
                        
                    <label class="tituloform"  id="nome">Nome completo:</label>
                    <input type="text" class="NOME_USUARIO" name="NOME_USUARIO" placeholder="Ex: Ana Luiza" id="inputpadraocadas">


                    <label class="tituloform">Data de Nascimento:</label>
                    <input type="date" class="DATA_NASCIMENTO" name="DATA_NASCIMENTO" id="inputpadraocadas" >


                    <label class="tituloform">CPF</label>
                    <input type="text"  class="CPF_USUARIO" name="CPF_idUSUARIO" placeholder="000.000.000-00" id="inputpadraocadas" >


                    </fieldset>
                    
                    
                <legend class="legendform">Localização</legend> 
                <fieldset class="fieldsetformu">
                    
                    
                    

                    <label class="tituloform">Cidade:</label> 
                    <input type="text" class="CIDADE_USUARIO" name="CIDADE_USUARIO" placeholder="ex: Itapetininga" id="inputpadraocadas"  >
                    
                    <label class="tituloform">Estado:</label> 
                    <input type="text" class="ESTADO_USUARIO" name="ESTADO_USUARIO" placeholder="ex: SP" id="inputpadraocadas" >
                    
   
                </fieldset>


                <legend class="legendform"> Informações para login</legend> 
                <fieldset class="fieldsetformu">
                    


                    <label class="tituloform">Email:</label>
                    <input type="email" class="EMAIL_USUARIO" name="EMAIL_USUARIO" placeholder="Digite seu email" id="inputpadraocadas"  >

                    
                    <label class="tituloform"> Senha :</label>
                    <input type="password" class="SENHA_USUARIO" name="SENHA_USUARIO" id="inputpadraocadas">
                    
                </fieldset> 
    


                
           
        </section>
        
           <?php include_once 'footer.php' ?>
    </body>
</html>

