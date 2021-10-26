<?php 
    session_start();        
    echo "Sesion cerrada correctamente";
    session_destroy();
    sleep(10);//no funciona no muestra el mensaje antes del sleep
    header("Location: index.php");


?>