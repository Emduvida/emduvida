<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>


    </head>
    <body>
        <table border="1px">
            <tr>

                <th>#</th>
                <th>Nome</th>
                <th>Fabricante</th>
                <th>Categoria</th>
                <th>Status</th>
                <th colspan="2">Ações</th>
            </tr>
            <?php
            $result = mysql_query("SELECT * FROM produtos");
            while ($res = mysql_fetch_array($result)) {
                ?>
                <tr>
                    <td><?php echo $res['COD_PRODUTO']; ?></td>
                    <td><?php echo $res['NOME_PRODUTO']; ?></td>
                    <td><?php echo $res['FABRICANTE'] ?></td>
                    <td><?php echo $res['STATUS_PRODUTO'] ?></td>
                    <td><?php echo $res['COD_CATEGORIA'] ?></td>
                    <td id="<?php echo $res['COD_PRODUTO'] ?>" class="btAlterar">Alterar/Desativar</td>
                </tr>
                <tr>
                    <td colspan="4" class="alterar <?php echo $res['COD_PRODUTO'] ?>">
                        <form method="post">
                            <?php
                            $codProd = $res['COD_PRODUTO'];
                            $seleciona = mysql_query("SELECT * FROM produtos WHERE COD_PRODUTO = '$codProd'");
                            $rs = mysql_fetch_array($seleciona);
                            ?>
                            <label for="nomeCat">Nome</label>
                            <input type="text" name="nomeProduto" value="<?php echo $rs['NOME_PRODUTO']; ?>"/>
                            <label for="nomeCat">Fabricante</label>
                            <input type="text" name="nomeFabricante" value="<?php echo $rs['FABRICANTE']; ?>"/>
                            Categoria<br/>
                            <select name="categoria">
                                <?php
                                $sql = mysql_query("SELECT * FROM categoria WHERE STATUS_CATEGORIA = 1");

                                while ($res = mysql_fetch_array($sql)) {
                                    ?>
                                    <option <?php echo ($rs['COD_CATEGORIA'] == $res['COD_CATEGORIA']) ? 'selected': ''; ?> value="<?php echo $res['COD_CATEGORIA'] ?>"><?php echo $res['NOME_CATEGORIA']; ?></option>
                                <?php } ?>
                            </select><br/>
                            <select name="status">
                                <option <?php echo ($rs['STATUS_PRODUTO'] == 1) ? 'selected' : ''; ?> value="1">Ativo</option>
                                <option <?php echo ($rs['STATUS_PRODUTO'] == 2) ? 'selected' : ''; ?> value="2">Inativo</option>
                            </select>

                            <input type="hidden" value="<?php echo $rs['COD_PRODUTO'] ?>" name="cod"/>
                            <input type="submit" name="alterar" value="alterar"/>
                        </form>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>


<?php
include_once './conexao/conect_db.php';
if (isset($_POST['alterar'])) {

    $nomeProduto = $_POST['nomeProduto'];
    $nomeFabricante = $_POST['nomeFabricante'];
    $codCategoria = $_POST['categoria'];
    $status = $_POST['status'];
    $codProduto = $_POST['cod'];

    $altera = "UPDATE produtos SET NOME_PRODUTO = '$nomeProduto', FABRICANTE = '$nomeFabricante', STATUS_PRODUTO = '$status', COD_CATEGORIA = '$codCategoria'  WHERE COD_PRODUTO = '$codProduto' ";

    if (mysql_query($altera)) {

        echo "<script>location.href='index.php?link=4';</script>";
    }else{
        
        echo mysql_error();
    }
}
?>
