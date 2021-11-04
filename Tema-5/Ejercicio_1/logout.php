<?php 
    session_start();        
    session_destroy();
    setCookie("cookieState", 3);
    header("Location: index.php");


?>