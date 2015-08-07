<?php session_start();
 include_once './admin/conexao/conect_db.php';
?>   

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/estilo_header.css"> 
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>-->
        <script src="admin/js/jquery-1.11.3.min.js"></script>
        
        <script src="js/ajax.js"></script>
        <script src="js/js.js"></script>
        
        <script>
        </script>
    </head>
    <body>
        <div id="carregando">
            <div id="carFundo"></div>
            <div class="carregando"></div>
        </div>
        <div class="msg"></div>
        <section id="todo">

            <?php include_once 'header.php'; ?>
            
            <?php
            include_once './config.inc';
            $url[1] = (empty($url[1])) ? null : $url[1];

            if ($url[0] != 'index') {
                if (file_exists('paginas' . '/' . $url[0] . '.php')) {
                    include_once 'paginas' . '/' . $url[0] . '.php';
                } else {
                    include_once 'paginas' . '/404.php';
                }
            } else {
                include_once 'paginas' . '/home.php';
            }

            echo $url[1];
            ?>

            <?php include_once 'footer.php' ?>
        </section>
    </body>
</html>