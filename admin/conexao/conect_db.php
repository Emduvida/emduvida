<?php
/* 
    //casa 
    $host = 'localhost';
    $db = 'emduvidabd';
    $user = 'root';
    $password = '';
  
    //servidor
           $host = 'mysql.hostinger.com.br';
    $db = 'u304881331_duvid';
    $user = 'u304881331_root';
    $password = 'emduvida';
    */


    //porra da escola
    $host = 'localhost';
    $db = 'emduvidabd';
    $user = 'root';
    $password = '12345678';


    $conn = @mysql_connect($host, $user, $password) or die(mysql_error());
    if($conn){
        
    }else{
 
     

    }
    mysql_select_db($db, $conn) or die(mysql_error());
