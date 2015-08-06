<?php

echo "<meta charset='utf-8'/>";

include_once '../funcoes.php';
$ac = $_POST['acao'];


if (isset($ac)) {
    if ($ac == 'cadCat') {


        $c['NOME_CATEGORIA'] = mysql_real_escape_string($_POST['NOME_CATEGORIA']);
        $c['COR_CATEGORIA'] = mysql_real_escape_string('#' . $_POST['COR_CATEGORIA']);
        $c['STATUS_CATEGORIA'] = mysql_real_escape_string('1');

        $n = contarLinhas('categoria', 'COR_CATEGORIA', $c['COR_CATEGORIA']);

        if ($n > 0) {
            
            alert("Esta cor já esta cadastrada!");
            retorna();
            
        } else {
            $campos = gerarCampos($c);
            $valores = gerarValores($c);

            inserir('categoria', $campos, $valores, "../index.php?link=1&l", "Categoria");
        }
    }
    
    if($ac == 'cadProd'){
        
        $c['NOME_PRODUTO'] = mysql_real_escape_string($_POST['nomeProduto']);
        $c['FABRICANTE'] = mysql_real_escape_string($_POST['nomeFabricante']);
        $c['COD_CATEGORIA'] = mysql_real_escape_string($_POST['categoria']);
        $c['STATUS_PRODUTO'] = mysql_real_escape_string('1');
        
        $n = contarLinhas('produtos', 'NOME_PRODUTO', $c['NOME_PRODUTO']);

        if ($n > 0) {
            alert("Esta produto já foi cadastrado!");
            retorna();
        }else{
            $campos = gerarCampos($c);
            $valores = gerarValores($c);
            
            
            inserir('produtos', $campos, $valores, "../index.php?link=2&l", "Produto");

        }
    }
}
