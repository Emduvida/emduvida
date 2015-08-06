<head>
    <link rel="stylesheet" type="text/css" href="css/estilo_header.css"> 
    <meta charset="UTF-08">
</head>
<section id="cabecalhoA">
    <header id="cabecalho">


        <a href="home"><img src="imagens/logo.png" id="logo"></a>

        <?php if(!isset($_SESSION['usuarioLogado'])){ 
            
            ?>
        <form id="login"  name="frmLogin">

            <label>
                <p class="nomeForm">E-mail: </p>
                <input type="email"class="login" name="emailLogin">
            </label>
            <label>
                <p class="nomeForm">Senha: </p> 
                <input type="password" id="loginsenha" name="senhaLogin">

            </label>
            <label>
               <p id="textoentrar">entrar</p>  
                <input type="submit" value="entrar" id="logar">
            </label>

        </form>
        <?php }else{
            echo $_SESSION['NOME_USUARIO'];
            ?>
        <a href="faca-sua-resenha">Faça sua resenha</a>
                
                
                <?php
        } ?>
        
        
        <div id="icones">
            <img src="imagens/fb.png" class="icones">
            <img src="imagens/twt.png" class="icones">
            <img src="imagens/inst.png" class="icones">
        </div>



        <nav id='menu'>
            <ul >
                <li id="primeiro_li"><a href="tecnologia" class="">  Tecnologia</a></li>
                <li class=""><a href="eletro" class="resenha">  Eletrodomésticos</a></li>
                <li class=""><a href="cultura" class="resenha">  Cultura</a></li>
                <li class=""><a href="moda" class="resenha">  Moda</a></li>
                <li class=""><a href="moveis" class="resenha">  Móveis</a></li>
                <li class=""><a href="outros" class="resenha">  Outros</a></li>
            </ul> 
            <hr id="linha">
        </nav>



<br/><br/>
        <form id="frmPesquisa">

            <input type="search"name="pesquisa" id="pesquisa" />
            <input type="image"  src="imagens/search.png" alt=""  name="Pesquisa" id="btn_search"/>

        </form>


    </header>   
</section>
