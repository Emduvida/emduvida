<?php
session_start();
include_once '../admin/conexao/conect_db.php';
include_once '../op/funcoes.php';
        sleep(1);



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
}