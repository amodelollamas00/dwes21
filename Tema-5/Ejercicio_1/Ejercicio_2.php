<?php
function timeout(){
    session_start();
    $tiempoInactivo = 60;

    if(isset($_SESSION["timeout"])){ 
        //Se calcula el tiempo que ha transcurrido desde que se conectó  
        $sessionTTL = time()-$_SESSION["timeout"];
        //Si el tiempo de inactividad supera al establecido se cierra la sesión y se lanza un fichero PHP con un aviso        
        if($sessionTTL > $tiempoInactivo){
            session_destroy();
            setcookie("cookieState", 4);
            header("Location: index.php");   
        }    
    }
    $_SESSION["timeout"] = time();
}
?>