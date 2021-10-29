<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
<?php
session_start();
if(isset($_SESSION["id"])){
    
    setCookie("cookieState", 1);
    header("Location: dashboard.php");
 
}else{ ?>

<FORM ACTION='login.php' METHOD='POST'>
Email: <input name='login' type='text'/>
Contraseña: <input name='pass'type='password'/>
<input type='submit' value='Enviar' class='enviar'></FORM>
<?php
}
?>
    
</body>
</html>

