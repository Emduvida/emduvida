<<<<<<< HEAD
<?php
include_once 'funcoes.php';
include_once 'classes/paginacao.php';
?>
<table border="1px">
    <tr>
        <th>#</th>
        <th>Nome Completo</th>
        <th>E-mail</th>
        <th>UF</th>
        <th>Status</th>
        <th>Tipo</th>
        <th>Sexo</th>
        <th colspan="2">Ações</th>
    </tr>

    <?php
    $conexao = new Consultas();
    $conexao->conecta();
    $txt = "";
    $q = $conexao->query("SELECT * FROM usuario ORDER BY COD_USUARIO DESC");
    $conexao->exibeRegistros();
    $pg = $conexao->setPage(5, "index.php?link=5", "/cat/teste");
    $i = 0;
    while ($rs = $conexao->resultados("<center><br><br><br><br>Não existem registros nesta consulta<br><br><br><br></center>", 1)) {
        ?>
        <tr>
            <td><?php echo $rs['COD_USUARIO']; ?></td>
            <td><?php echo $rs['NOME_USUARIO'] . $rs['SOBRENOME_USUARIO'] ?></td>
            <td><?php echo $rs['EMAIL_USUARIO'] ?></td>
            <td><?php echo $rs['UF_USUARIO'] ?></td>
            <td><?php echo ($rs['STATUS_USUARIO'] == 1) ? 'Ativo' : 'Inativo' ?></td>
            <td><?php echo ($rs['COD_TIPO'] == 1) ? 'Comum' : 'Administrador' ?></td>
            <td><?php echo ($rs['SEXO_USUARIO'] == 'M') ? 'Masculino' : 'Feminino' ?></td>
            <td id="<?php echo $rs['COD_USUARIO'] ?>" class="btAlterar">Ver mais..</td>
        </tr>
        <tr>
            <td colspan="4" class="alterar <?php echo $rs['COD_USUARIO'] ?>">

                <?php
                $res = selecionar("usuario", "COD_USUARIO", $rs['COD_USUARIO']);
                    $txtTipo = ($res['TIPO_USUARIO'] != 1) ? 'Comum' : 'Administrador';
                ?>
                <form method="post" action="op/alterar.php">
                    <label><strong>Nome: </strong> <?php echo $res['NOME_USUARIO']; ?></label>
                    <label><strong>Sobrenome: </strong> <?php echo $res['SOBRENOME_USUARIO']; ?></label>
                    <label><strong>E-mail: </strong> <?php echo $res['EMAIL_USUARIO']; ?></label>
                    <label><strong>Imagem: </strong> <?php echo ($res['IMAGEM_PERFIL'] == null) ? 'Sem imagem de perfil' : "aaa"; ?></label>
                    <label><strong>Data de nascimento: </strong> <?php echo $res['DATA_NASCIMENTO']; ?></label>
                    <label><strong>E-mail: </strong> <?php echo $res['EMAIL_USUARIO']; ?></label>
                    <label><strong>UF: </strong> <?php echo $res['UF_USUARIO']; ?></label>
                    <label><strong>Cidade: </strong> <?php echo $res['CIDADE_USUARIO']; ?></label>
                    <label><strong>Status: </strong> 

                        <select name="STATUS_USUARIO">
                            <option <?php echo ($res['STATUS_USUARIO'] == 1) ? 'Selected' : '' ?> value="1">Ativo</option>
                            <option <?php echo ($res['STATUS_USUARIO'] == 2) ? 'Selected' : '' ?> value="2">Inativo</option>
                        </select>
                    </label>
                    <label><strong>Nível: </strong>
                        <select name="COD_TIPO">
                            <option value="2" <?php echo ($res['COD_TIPO'] != 1) ? '' : 'Selected' ?>>Administrador</option>
                            <option value="1" <?php echo ($res['COD_TIPO'] == 1) ? 'Selected' : '' ?> >Comum</option>
                        </select>
                    </label>
                    <label><strong>Sexo: </strong> <?php echo ($rs['SEXO_USUARIO'] == 'M') ? 'Masculino' : 'Feminino' ?></label>
                    <input type="hidden" name="cod" value="<?php echo $rs['COD_USUARIO']; ?>"/>
                    
                    <input type="hidden" name="acao" value="altUsuario"/>
                    <input type="submit" value="Alterar dados"/>
                </form>
            </td>
        </tr>

        <?php
    }
    ?>          </table>
    <?php
echo $pg;
$conexao->desconecta();
?>
=======
<?php
include_once 'funcoes.php';
include_once 'classes/paginacao.php';
?>
<table border="1px">
    <tr>
        <th>#</th>
        <th>Nome Completo</th>
        <th>E-mail</th>
        <th>UF</th>
        <th>Status</th>
        <th>Tipo</th>
        <th>Sexo</th>
        <th colspan="2">Ações</th>
    </tr>

    <?php
    $conexao = new Consultas();
    $conexao->conecta();
    $txt = "";
    $q = $conexao->query("SELECT * FROM usuario ORDER BY COD_USUARIO DESC");
    $conexao->exibeRegistros();
    $pg = $conexao->setPage(5, "index.php?link=5", "/cat/teste");
    $i = 0;
    while ($rs = $conexao->resultados("<center><br><br><br><br>Não existem registros nesta consulta<br><br><br><br></center>", 1)) {
        ?>
        <tr>
            <td><?php echo $rs['COD_USUARIO']; ?></td>
            <td><?php echo $rs['NOME_USUARIO'] . $rs['SOBRENOME_USUARIO'] ?></td>
            <td><?php echo $rs['EMAIL_USUARIO'] ?></td>
            <td><?php echo $rs['UF_USUARIO'] ?></td>
            <td><?php echo ($rs['STATUS_USUARIO'] == 1) ? 'Ativo' : 'Inativo' ?></td>
            <td><?php echo ($rs['COD_TIPO'] == 1) ? 'Comum' : 'Administrador' ?></td>
            <td><?php echo ($rs['SEXO_USUARIO'] == 'M') ? 'Masculino' : 'Feminino' ?></td>
            <td id="<?php echo $rs['COD_USUARIO'] ?>" class="btAlterar">Ver mais..</td>
        </tr>
        <tr>
            <td colspan="4" class="alterar <?php echo $rs['COD_USUARIO'] ?>">

                <?php
                $res = selecionar("usuario", "COD_USUARIO", $rs['COD_USUARIO']);
                    $txtTipo = ($res['TIPO_USUARIO'] != 1) ? 'Comum' : 'Administrador';
                ?>
                <form method="post" action="op/alterar.php">
                    <label><strong>Nome: </strong> <?php echo $res['NOME_USUARIO']; ?></label>
                    <label><strong>Sobrenome: </strong> <?php echo $res['SOBRENOME_USUARIO']; ?></label>
                    <label><strong>E-mail: </strong> <?php echo $res['EMAIL_USUARIO']; ?></label>
                    <label><strong>Imagem: </strong> <?php echo ($res['IMAGEM_PERFIL'] == null) ? 'Sem imagem de perfil' : "aaa"; ?></label>
                    <label><strong>Data de nascimento: </strong> <?php echo $res['DATA_NASCIMENTO']; ?></label>
                    <label><strong>E-mail: </strong> <?php echo $res['EMAIL_USUARIO']; ?></label>
                    <label><strong>UF: </strong> <?php echo $res['UF_USUARIO']; ?></label>
                    <label><strong>Cidade: </strong> <?php echo $res['CIDADE_USUARIO']; ?></label>
                    <label><strong>Status: </strong> 

                        <select name="STATUS_USUARIO">
                            <option <?php echo ($res['STATUS_USUARIO'] == 1) ? 'Selected' : '' ?> value="1">Ativo</option>
                            <option <?php echo ($res['STATUS_USUARIO'] == 2) ? 'Selected' : '' ?> value="2">Inativo</option>
                        </select>
                    </label>
                    <label><strong>Nível: </strong>
                        <select name="COD_TIPO">
                            <option value="2" <?php echo ($res['COD_TIPO'] != 1) ? '' : 'Selected' ?>>Administrador</option>
                            <option value="1" <?php echo ($res['COD_TIPO'] == 1) ? 'Selected' : '' ?> >Comum</option>
                        </select>
                    </label>
                    <label><strong>Sexo: </strong> <?php echo ($rs['SEXO_USUARIO'] == 'M') ? 'Masculino' : 'Feminino' ?></label>
                    <input type="hidden" name="cod" value="<?php echo $rs['COD_USUARIO']; ?>"/>
                    
                    <input type="hidden" name="acao" value="altUsuario"/>
                    <input type="submit" value="Alterar dados"/>
                </form>
            </td>
        </tr>

        <?php
    }
    ?>          </table>
    <?php
echo $pg;
$conexao->desconecta();
?>
>>>>>>> origin/master
