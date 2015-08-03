<head>
    <link rel="stylesheet" type="text/css" href="css/estilo_header.css"> 
    <meta charset="UTF-08">
</head>
<section id="cabecalhoA">
    <header id="cabecalho">


        <a href="home"><img src="imagens/logo.png" id="logo"></a>
        
        <form id="login">
            
            <label>
                <p class="nomeForm">E-mail: </p>
                <input type="email"class="login" name="">
            </label>
            <label>
                 <p class="nomeForm">Senha: </p> 
                 <input type="password" id="loginsenha" name="">
                
            </label>
            <label>
                <p id="textoentrar">entrar</p>  
            <input type="submit" value="entrar" id="logar">
            </label>
            
        </form>
        
        <div id="icones">
            <img src="imagens/fb.png" class="icones">
            <img src="imagens/twt.png" class="icones">
            <img src="imagens/inst.png" class="icones">
        </div>



        <nav id='menu'>
            <ul >
                <li id="primeiro_li"><a href="tecnologia.php" class="">  Tecnologia</a></li>
                <li class=""><a href="eletro.php" class="resenha.php">  Eletrodomésticos</a></li>
                <li class=""><a href="cultura.php" class="resenha.php">  Cultura</a></li>
                <li class=""><a href="moda.php" class="resenha.php">  Moda</a></li>
                <li class=""><a href="moveis.php" class="resenha.php">  Móveis</a></li>
                <li class=""><a href="outros.php" class="resenha.php">  Outros</a></li>
            </ul> 
            <hr id="linha">
        </nav>
        
        
        

        <form id="frmPesquisa">
            <input type="search"name="pesquisa" id="pesquisa" />
            <input type="image"  src="imagens/search.png" alt=""  name="Pesquisa" id="btn_search"/>
        </form>
        
        
    </header>   
</section>