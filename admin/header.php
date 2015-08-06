
<header>
            <nav>
                <ul>
                    <li><a href="index.php?link=1">Cadastrar Categoria</a></li>
                    <li><a href="index.php?link=2">Consultar Categoria</a></li><br/><Br/>
                    <li><a href="index.php?link=3">Cadastrar Produto</a></li>
                    <li><a href="index.php?link=4">Consultar Produto</a></li>
                    <li><a href="">Resenha</a></li>
                    <li><a href="">usuários</a></li> 
                    <li><a href="">Comentários</a></li> 
                </ul>
                <?php
                    session_start();
                    
                    echo "Seja bem vindo!" . $_SESSION['nome_usuario'];
                ?>
                <a href="logout.php"> Sair </a>
            </nav>

