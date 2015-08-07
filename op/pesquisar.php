<?php

include_once '../admin/conexao/conect_db.php';

switch ($_POST['acao']){
    case "pesquisarProd":
        
        $sql = mysql_query("SELECT * FROM produtos WHERE NOME_PRODUTO like '%{$_POST['produto']}%'");
        
        $lista = '';
        
        while($rs = mysql_fetch_assoc($sql)){
            
            $lista .= '<li class="j_busca" id="'.$rs['NOME_PRODUTO'].'">'.$rs['NOME_PRODUTO'].'</li><br/>';
            
        }
        
        if($lista == ""){
            $lista = "2";
        }
        echo $lista;
        
        
        break;
}