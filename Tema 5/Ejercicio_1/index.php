<?php
session_start();
if($_SESSION["id"]!=null || $_SESSION["id"]!=""){

    echo "Mi email es ".$_SESSION["id"];
    echo "<a href='dashboard.php'>Continuar</a>";

}else{

echo "<FORM ACTION='login.php' METHOD='POST'>";
echo "Usuario: <input name='login' type='text'/>  ";
echo "Pass: <input name='pass'type='password'/> ";
echo "<input type='submit' value='Enviar'  ";
echo "class='enviar'></FORM>";

}
?>
