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
            Nome do produto<br/>
            <input type="text" name="nomeProduto"/><br/><br/>
            Nome do fabricante<br/>
            <input type="text" name="nomeFabricante"/><br/><br/>
            Categoria<br/>
            <select name="categoria">
                <?php
                $sql = mysql_query("SELECT * FROM categoria WHERE STATUS_CATEGORIA = 1");

                while ($rs = mysql_fetch_array($sql)) {
                    ?>
                    <option value="<?php echo $rs['COD_CATEGORIA'] ?>"><?php echo $rs['NOME_CATEGORIA']; ?></option>
                <?php } ?>
            </select>


            <input type="submit" name="cadastrarProduto" value="Cadastrar produto" class="inputSubmit"/>
        </form>
    </body>
</html>
<?php
if (isset($_POST['cadastrarProduto'])) {


    $nomeProduto = $_POST['nomeProduto'];
    $nomeFabricante = $_POST['nomeFabricante'];
    $codCategoria = $_POST['categoria'];


    $verificaQtde = mysql_query("SELECT * FROM produtos WHERE NOME_PRODUTO = '$nomeProduto'");
    $numLinhas = mysql_num_rows($verificaQtde);

    if ($numLinhas > 0) {
        echo "<script>alert('Este produto já está cadastrado!'); history.back(-2)</script>";
    } else {


        $sql_insert_produto = "INSERT INTO produtos(NOME_PRODUTO, STATUS_PRODUTO, FABRICANTE, COD_CATEGORIA) VALUES ('$nomeProduto','1', '$nomeFabricante', $codCategoria)";

        if (mysql_query($sql_insert_produto)) {

            echo "<script>alert('Produto cadastrado com sucesso');location.href='index.php?link=3'</script>";
        } else {
            echo mysql_error();
        }
    }
}
    
