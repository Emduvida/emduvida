
<?php

session_start();

unset( $_SESSION['email_usuario']);
unset( $_SESSION['tipo_usuario']);
unset( $_SESSION['nome_usuario']);


echo "<script>location.href='index.php'</script>";
