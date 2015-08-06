
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
            textarea{
                width: 248px;
                height: 150px;
            }
            select{
                width: 254px;
                height: 30px;
            }
        </style>
    </head>
    <body>
        <form method="post" action="">
            Título da resenha(Escolha o produto a ser descrito)<br/>
            <select name="categoria">
                <option>Selecione</option>
        <?php
            $result = mysql_query("SELECT * FROM CATEGORIA");
            while($res = mysql_fetch_array($result)){
        ?>
                <option value="$res['NOME_CATEGORIA']"><?php echo $res['NOME_CATEGORIA'] ?></option>
        <?php
            }
        ?>
            </select><br/>
            Escreva sua resenha<br/>
            <textarea name="corpoResenha"></textarea><br/><br/>
            
            <input type="submit" name="publicarResenha" value="Publicar resenha" class="inputSubmit"/>
        </form>
    </body>
</html>
<?php
    @$tituloCategoria = $_POST['tituloCategoria'];
    @$corpoResenha = $_POST['corpoResenha'];

    if(isset($_POST['publicarResenha'])){
    
    $sql_insert_categoria = "INSERT INTO RESENHA(CORPO_RESENHA, NOTA_RESENHA, DATA_RESENHA, ,STATUS_PRODUTO) VALUES ('$nomeProduto','0', '1')";
    
    mysql_query($sql_publicar_resenha) or die(mysql_error());
    }
