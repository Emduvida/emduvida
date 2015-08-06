<?php

//echo "<meta charset='utf-8'/>";

include_once '../admin/funcoes.php';
$ac = $_POST['acao'];


if (isset($ac)) {
    if($ac == 'cadUsuario'){
        
        $c['NOME_USUARIO'] = mysql_real_escape_string($_POST['NOME_USUARIO']);
        $c['IMAGEM_PERFIL'] = mysql_real_escape_string("aham");
        $c['DATA_NASCIMENTO'] = mysql_real_escape_string($_POST['DATA_NASCIMENTO']);
        $c['CPF_USUARIO'] = mysql_real_escape_string($_POST['CPF_USUARIO']);
        $c['EMAIL_USUARIO'] = mysql_real_escape_string($_POST['EMAIL_USUARIO']);
        $c['SENHA_USUARIO'] = mysql_real_escape_string(base64_encode(md5($_POST['SENHA_USUARIO'])));
        $c['UF_USUARIO'] = mysql_real_escape_string($_POST['ESTADO_USUARIO']);
        $c['CIDADE_USUARIO'] = mysql_real_escape_string($_POST['CIDADE_USUARIO']);
        $c['STATUS_USUARIO'] = mysql_real_escape_string('1');
        $c['COD_TIPO'] = mysql_real_escape_string('1');
        

        
        $n = contarLinhas("SELECT * FROM usuario WHERE CPF_USUARIO = '{$c['CPF_USUARIO']}'");
        
        if($n > 0){
            echo '1';
        }else{
            $nEmail = contarLinhas("SELECT * FROM usuario WHERE EMAIL_USUARIO= '{$c['EMAIL_USUARIO']}'");

            if($nEmail > 0){
                echo '2';
            }else{
                
                $campos = gerarCampos($c);
                $valores = gerarValores($c);
                
                if(inserir('usuario', $campos, $valores)){
                 echo '3';   
                }
                
            }
        }
        
    }
}
