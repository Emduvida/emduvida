<?php

include_once 'conexao/conect_db.php';

function inserir($tabela, $campos, $valores) {
    
    $exec = mysql_query("INSERT INTO $tabela (" . $campos . ") VALUES(" . $valores . ")") or die(mysql_error());
    if ($exec == true) {
        return true;
    } else {
        return mysql_error();
    }
}


function listar($tabela, $campos = ""){
    
    $sql = "SELECT ";
    if($campos == ""){
        $sql .= " * ";
    }else{
        $sql .= " $campos ";
    }
    
    $sql .= " FROM $tabela";
    
   $exec = mysql_query($sql);
   return $exec;
    
}

function selecionar($tabela, $identificador, $valor, $campos = ""){
    $sql = "SELECT ";
    if($campos == ""){
        $sql .= " * ";
    }else{
        $sql .= " $campos ";
    }
    
    $sql .= " FROM $tabela WHERE $identificador = '{$valor}'";
    
     
   $exec = mysql_query($sql);
   $rs = mysql_fetch_array($exec);
   return $rs;
}

function contarLinhas($sql){
    
    
     
   $exec = mysql_query($sql);
   
   return mysql_num_rows($exec);
}


function alterar($tabela, $camposVal, $campo, $valor, $vaiPara) {
    $sql = "UPDATE $tabela SET $camposVal WHERE $campo = '$valor'";
    if (mysql_query($sql)) {
        echo "<script>alert('Dados alterados com sucesso!'); location.href='$vaiPara'</script>";
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

function redireciona($caminho){
    
    echo "<script>location.href='$caminho'</script>";
}

function alert($mensagem){
    echo "<script>alert('$mensagem')</script>";
}

function retorna(){
    echo "<script>history.back(-2)</script>";
}