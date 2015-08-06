<?php
session_start();
include_once '../admin/conexao/conect_db.php';
include_once '../admin/funcoes.php';




switch ($_POST['acao']) {
    case 'cad1':
        
        $_SESSION['emailCadastro'] = $_POST['EMAIL_USUARIO'];
        $_SESSION['senhaCadastro'] = $_POST['SENHA_USUARIO'];
        
        if(contarLinhas("SELECT * FROM usuario WHERE EMAIL_USUARIO = '{$_POST['EMAIL_USUARIO']}'") == 1){
            echo '1';
        }else{
            echo '3';
        }
        
        
        break;
        
    case 'login':
        
        $email = mysql_real_escape_string($_POST['emailLogin']);
        $senha = mysql_real_escape_string(base64_encode(md5($_POST['senhaLogin'])));
        $sql = "SELECT * FROM usuario WHERE EMAIL_USUARIO = '$email' AND SENHA_USUARIO = '$senha'";
        if(contarLinhas($sql) == 1){
           $rs =  selecionar("usuario", "EMAIL_USUARIO", $email);
           
           if($rs['STATUS_USUARIO'] == '0'){
               echo '1';
           }else{
                $_SESSION['COD_USUARIO'] = $rs['COD_USUARIO'];
                $_SESSION['NOME_USUARIO'] = $rs['NOME_USUARIO'];
                $_SESSION['EMAIL_USUARIO'] = $rs['EMAIL_USUARIO'];
                $_SESSION['usuarioLogado'] = true;
                echo '3';
           }
           
        }else{
            echo '2';
        }
        
        /*

         * 1 - retorna que o usuario é inativo
         * 2 - retorna que os dados digitados foram incorretos
         * 3 - retorna sucesso         */
        
        break;
}