
<?php


$email = $_SESSION['emailCadastro'];
$senha = $_SESSION['senhaCadastro'];
?>


<form id="cadastro" name="cadastroUsuario" method="post">





    <section id="imgusuario">
        <div id="imagem_usuario">
        </div>
    </section>

    <legend class="legendform">Dados Pessoais</legend> 
    <fieldset class="fieldsetformu"> 

        <label class="tituloform"  id="nome">Nome completo:</label>
        <input type="text" class="NOME_USUARIO" name="NOME_USUARIO" placeholder="Ex: Ana Luiza" id="inputpadraocadas">


        <label class="tituloform">Data de Nascimento:</label>
        <input type="date" class="DATA_NASCIMENTO" name="DATA_NASCIMENTO" id="inputpadraocadas" >


        <label class="tituloform">CPF</label>
        <input type="text"  class="CPF_USUARIO" name="CPF_USUARIO" placeholder="000.000.000-00" id="inputpadraocadas" >


    </fieldset>


    <legend class="legendform">Localização</legend> 
    <fieldset class="fieldsetformu">




        <label class="tituloform">Cidade:</label> 
        <input type="text" class="CIDADE_USUARIO" name="CIDADE_USUARIO" placeholder="ex: Itapetininga" id="inputpadraocadas">

        <label class="tituloform">Estado:</label> 
        <input type="text" class="ESTADO_USUARIO" name="ESTADO_USUARIO" placeholder="ex: SP" id="inputpadraocadas">


    </fieldset>


    <legend class="legendform"> Informações para login</legend> 
    <fieldset class="fieldsetformu">



        <label class="tituloform">Email:</label>
        <input type="email" class="EMAIL_USUARIO" name="EMAIL_USUARIO"value="<?php echo $email; ?>" placeholder="Digite seu email" id="inputpadraocadas"  >


        <label class="tituloform"> Senha :</label>
        <input type="password" class="SENHA_USUARIO" name="SENHA_USUARIO" value="<?php echo $senha; ?>" id="inputpadraocadas">

    </fieldset> 



    <input type="hidden" name="acao" value="cadUsuario"/>
    <input type="submit" value="Cadastrar"  id="inputcadastrouser">
</form>
