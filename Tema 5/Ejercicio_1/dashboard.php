<?php

    if($_COOCKIE["cookieState"] == 1){
    session_start();
    echo "Mi email es ".$_SESSION["email"];
    echo "<a href='logout.php'>dashboard to logout</a>";}
   

?>