<?php
// Conexão com o Banco de Dados
//FUNÇÕES UTILIZADAS PARA REALIZAÇÃO DOS COMANDOS BASICOS NO BANCO DE DADOS, VERSÃO 1.0 - IGOR CARLOS DA SILVA.
function inserir($tabela, $campos, $valores) {
    $exec = mysql_query("INSERT INTO $tabela (" . $campos . ") VALUES(" . $valores . ")");
    if ($exec == true) {
        return true;
    } else {
        return mysql_error();
    }
}

function contarLinhas($sql){
    $exec = mysql_query($sql) or die(mysql_error());
    
    $linhas = mysql_num_rows($exec);
    
    return $linhas;
}
function selecionar($tabela, $campo = "", $valor = "") {
    if ($campo == "" && $valor == "") {
        $sql = "SELECT * FROM {$tabela}";
    } else {
        $sql = "SELECT * FROM {$tabela} WHERE {$campo} = '{$valor}'";
    }
    $exec = mysql_query($sql) or die(mysql_error());
    $rs = mysql_fetch_array($exec);
    return $rs;
}

function listar($tabela, $campo = "", $valor = "") {
    if ($campo == "" && $valor == "") {
        $sql = "SELECT * FROM {$tabela}";
    } else {
        $sql = "SELECT * FROM {$tabela} WHERE {$campo} = '{$valor}'";
    }
    $exec = mysql_query($sql) or die(mysql_error());
    return $exec;
}

function deletar($tabela, $campo, $valor, $vaiPara) {
    $sql = "DELETE FROM {$tabela} WHERE {$campo} = '{$valor}'";
    if (mysql_query($sql)) {
        echo "<script>alert('Registro deletado com sucesso! '); location.href='$vaiPara'</script>";
    } else {
        echo "<script>alert('Erro ao deletar registro = " . mysql_error() . "'); location.href='$vaiPara'</script>";
    }
}

function alterar($tabela, $camposVal, $campo, $valor) {
    $sql = "UPDATE $tabela SET $camposVal WHERE $campo = '$valor'";
    if (mysql_query($sql)) {
       return true;
    } else {
        echo mysql_error();
    }
}

function gerarCampos($campos) {
    $cps = implode(',', array_keys($campos));
    return $cps;
}

function gerarValores($valores) {
    $values = "'" . implode("', '", array_values($valores)) . "'";
    return $values;
}
function gerarCamposAlteracao($u) {
    foreach ($u as $key => $value) {
        $updates[] = "$key = '$value'";
    }
    $qr = implode(', ', $updates);
    return $qr;
}
function mask($val, $mask) {
    $maskared = '';
    $k = 0;
    for ($i = 0; $i <= strlen($mask) - 1; $i++) {
        if ($mask[$i] == '#') {
            if (isset($val[$k]))
                $maskared .= $val[$k++];
        }
        else {
            if (isset($mask[$i]))
                $maskared .= $mask[$i];
        }
    }
    return $maskared;
}
function upImagem($imagem, $diretorio) {
    
        
        $permissao = array('image/jpg', 'image/jpeg', 'image/pjpeg', 'image/png', 'text/plain');
        $ext = ($imagem['type'] == 'text/plain' ? '.txt' : ($imagem['type'] == 'image/png' ? '.png' : '.jpg'));
        $size = 1024 * 1024 * 2;
        if ($imagem['size'] > $size) {
            echo '<script>alert("Arquivo nao pode ser maior que 2mb"); history.back(-2)';
            return "";
        } elseif (!in_array($imagem['type'], $permissao)) {
            echo '<script>alert("Apenas imagens ou arquivos de texto"); history.back(-2)</script>';
            
            return "";
        } else {
            $pasta = $diretorio;
            $nome_arq = md5(time()) . $ext;
            $foto = $pasta . '/' . $nome_arq;
            move_uploaded_file($imagem['tmp_name'], $pasta . '/' . $nome_arq);
            return ($nome_arq);
        }
}