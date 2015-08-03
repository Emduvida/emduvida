<?php

echo "<meta charset='utf-8'/>";

include_once '../admin/funcoes.php';
$ac = $_POST['acao'];


if (isset($ac)) {
    if($ac == 'cadUsuario'){
        
        $c['NOME_USUARIO'] = mysql_real_escape_string($_POST['NOME_USUARIO']);
        $c['SOBRENOME_USUARIO'] = mysql_real_escape_string($_POST['SOBRENOME_USUARIO']);
        $c['IMAGEM_PERFIL'] = mysql_real_escape_string("aham");
        $c['DATA_NASCIMENTO'] = mysql_real_escape_string($_POST['DATA_NASCIMENTO']);
        $c['CPF_USUARIO'] = mysql_real_escape_string($_POST['CPF_idUSUARIO']);
        $c['EMAIL_USUARIO'] = mysql_real_escape_string($_POST['EMAIL_USUARIO']);
        $c['SENHA_USUARIO'] = mysql_real_escape_string($_POST['SENHA_USUARIO']);
        $c['UF_USUARIO'] = mysql_real_escape_string($_POST['ESTADO_USUARIO']);
        $c['CIDADE_USUARIO'] = mysql_real_escape_string($_POST['CIDADE_USUARIO']);
        $c['STATUS_USUARIO'] = mysql_real_escape_string('1');
        $c['COD_TIPO'] = mysql_real_escape_string('1');
        $c['SEXO_USUARIO'] = mysql_real_escape_string($_POST['SEXO_USUARIO']);
        
       /* echo "<pre>";print_r($c);
echo "</pre>";
        */
        
        $n = contarLinhas('usuario', 'CPF_USUARIO', $c['CPF_USUARIO']);
        
        if($n > 0){
            
        }else{
            $nEmail = contarLinhas('usuario', 'EMAIL_USUARIO', $c['EMAIL_USUARIO']);

            if($nEmail > 0){
                
                alert("Email já cadastrado!");
                retorna();
                
            }else{
                
                $campos = gerarCampos($c);
                $valores = gerarValores($c);
                
                inserir('usuario', $campos, $valores, "../index.php", "usuario");
                
            }
        }
        
    }
}