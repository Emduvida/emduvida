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
                <th>Nome da categoria</th>
                <th>Cor da categoria</th>
                <th>Status da categoria</th>
                <th colspan="2">Ações</th>
            </tr>
            <?php
            $result = mysql_query("SELECT * FROM categoria");
            while ($res = mysql_fetch_array($result)) {
                ?>
            <tr style="background-color: <?php echo $res['COR_CATEGORIA'] ?>">
                    <td><?php echo $res['NOME_CATEGORIA']; ?></td>
                    <td><?php echo $res['COR_CATEGORIA'] ?></td>
                    <td><?php echo $res['STATUS_CATEGORIA'] ?></td>
                    <td id="<?php echo $res['COD_CATEGORIA'] ?>" class="btAlterar">Alterar/Desativar</td>
                </tr>
                <tr>
                    <td colspan="4" class="alterar <?php echo $res['COD_CATEGORIA'] ?>">
                        <form method="post">
                            <?php
                            $codCat = $res['COD_CATEGORIA'];
                            echo $codCat;
                            $seleciona = mysql_query("SELECT * FROM categoria WHERE COD_CATEGORIA = '$codCat'");
                            $rs = mysql_fetch_array($seleciona);
                            ?>
                            <label for="nomeCat">Nome</label>
                            <input type="text" name="nomeCat" value="<?php echo $rs['NOME_CATEGORIA']; ?>"/>
                            <label for="nomeCat">Cor</label>
                            <input type="text" name="corCat" class="color"value="<?php echo $rs['COR_CATEGORIA']; ?>"/>

                            <select name="status">
                                <option <?php echo ($rs['STATUS_CATEGORIA'] == 1) ? 'selected' : ''; ?> value="1">Ativo</option>
                                <option <?php echo ($rs['STATUS_CATEGORIA'] == 2) ? 'selected' : ''; ?> value="2">Inativo</option>
                            </select>
                            
                            <input type="hidden" value="<?php echo $rs['COD_CATEGORIA'] ?>" name="cod"/>
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
    if(isset($_POST['alterar'])){
        
        $nomeCat = $_POST['nomeCat'];
        $cor = '#'.$_POST['corCat'];
        $status = $_POST['status'];
        $codCat = $_POST['cod'];
        
        
        $altera = "UPDATE categoria SET NOME_CATEGORIA = '$nomeCat', COR_CATEGORIA = '$cor', STATUS_CATEGORIA = '$status' WHERE COD_CATEGORIA = '$codCat'";
        
        if(mysql_query($altera)){
            
            echo "<script>location.href='index.php?link=2';</script>";
            
        }
        
    }


?>
