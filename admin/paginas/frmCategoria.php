<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <style type="text/css">
            body{
                font-family: Verdana;
            }
            input{
                width: 250px;
                height: 25px;
            }
            .inputSubmit{
                width: 252px;
                border: none;
                height: 30px;
                background: #CCCCCC;
                color: #FFFFFF;
                cursor: pointer;
            }
            .inputSubmit:hover{
                background: #DDDDDD;
            }
        </style>
    </head>
    <body>
        <form method="post" action="">
            <label for="nomeResenha">Nome da Categoria:</label><br/>
            <input type="text" name="nomeResenha"/><br/>
            Cor da categoria:<br/>
            <input type="text" name="corResenha" class="color"/><br/><br/>
            
            <input type="submit" name="cadastrarResenha" value="Cadastrar categoria" class="inputSubmit"/>
        </form>
    </body>
</html>
<?php


    if(isset($_POST['cadastrarResenha'])){
    
    $nomeResenha = $_POST['nomeResenha'];
    $corResenha = '#'.$_POST['corResenha'];

    
            
    $sql_insert_categoria = "INSERT INTO categoria(NOME_CATEGORIA, COR_CATEGORIA, STATUS_CATEGORIA) VALUES ('$nomeResenha','$corResenha', '1')";
    
    mysql_query($sql_insert_categoria) or die(mysql_error());
    }

?>
