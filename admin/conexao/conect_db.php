<?php
/*
    $host = 'localhost';
    $db = 'emduvidabd';
    $user = 'root';
    $password = '';
  */  
    
           $host = 'mysql.hostinger.com.br';
    $db = 'u304881331_duvid';
    $user = 'u304881331_root';
    $password = 'emduvida';
    
    $conn = @mysql_connect($host, $user, $password) or die(mysql_error());
    if($conn){
        
    }else{
 
    

    }
    mysql_select_db($db, $conn) or die(mysql_error());