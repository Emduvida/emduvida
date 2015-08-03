
        <?php if (isset($_GET['c'])) { ?>
        
        <form method="post" action="op/inserir.php">
                <label for="nomeResenha">Nome da Categoria:</label><br/>
                <input type="text" name="NOME_CATEGORIA"/><br/>
                Cor da categoria:<br/>
                <input type="text" name="COR_CATEGORIA" class="color"/><br/><br/>
                <input type="hidden" name="acao" value="cadCat"/>
                <input type="submit" name="cadastrarResenha" value="Cadastrar categoria" class="inputSubmit"/>
            </form>
        
        
        <?php } else { ?>

            <table border="1px">
                <tr>
                    <th>Nome da categoria</th>
                    <th>Cor da categoria</th>
                    <th>Status da categoria</th>
                    <th colspan="2">Ações</th>
                </tr>
                <?php
            $conexao = new Consultas();
            
            $conexao->conecta();
            
            $txt = "";
            
            $q = $conexao->query("SELECT * FROM categoria ORDER BY COD_CATEGORIA DESC");
            
            $conexao->exibeRegistros();
            
            $pg = $conexao->setPage(5, "index.php?link=1&l", "");
            
            $i = 0;
            while ($res = $conexao->resultados("<center><br><br><br><br>Não existem registros nesta consulta<br><br><br><br></center>", 1)) {
                
                if($res['STATUS_CATEGORIA'] == 1){$txtStatus = "Ativa";}else{$txtStatus = "Inativa";}
                
                ?>
                    <tr style="background-color: <?php echo $res['COR_CATEGORIA'] ?>">
                        <td><?php echo $res['NOME_CATEGORIA']; ?></td>
                        <td><?php echo $res['COR_CATEGORIA'] ?></td>
                        <td><?php echo $txtStatus ?></td>
                        <td id="<?php echo $res['COD_CATEGORIA'] ?>" class="btAlterar">Alterar/Desativar</td>
                    </tr>
                    <tr>
                        <td colspan="4" class="alterar <?php echo $res['COD_CATEGORIA'] ?>">
                            <form method="post" action="op/alterar.php">
                                <?php
                                $codCat = $res['COD_CATEGORIA'];
                                $rs = selecionar('categoria', 'COD_CATEGORIA', $codCat);
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
                                <input type="hidden" name="acao" value="altCat"/>
                                <input type="submit" name="alterar" value="alterar"/>
                            </form>
                        </td>
                    </tr>
                    <?php
                    
                    
                }
                ?>
            </table>

        <?php
                 echo $pg; } ?>
<?php
