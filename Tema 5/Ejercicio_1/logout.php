<?php 
    session_start();        
    echo "Sesion cerrada correctamente";
    session_destroy();
    setCookie("cookieState", 3);
    header("Location: index.php");


?>