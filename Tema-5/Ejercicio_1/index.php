<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Index</title>
</head>
<body>
    <?php
    if(isset($_COOKIE["cookieState"])){
    switch($_COOKIE["cookieState"]){

        case 0://conectado bien 
            break;
        case 1://no existe en la base de datos
            ?>
            <div class="alert alert-danger" role="alert">
            El email o la contraseña son incorrectas
            </div>
            <?php
            setcookie("cookieState", 0);
            break;
        case 2://Debes iniciar sesion previamentes
            ?>
            <div class="alert alert-danger" role="alert">
            Debes iniciar sesion previamente
            </div>
            <?php
            setcookie("cookieState", 0);
            break;
        case 3://sesion cerrada correctamente
            ?>
            <div class="alert alert-success" role="alert">
            Sesion cerrada correctamente
            </div>
            <?php
            setcookie("cookieState", 0);
            break;

            case 4://sesion cerrada por inactividad
                ?>
                <div class="alert alert-danger" role="alert">
                sesion cerrada por inactividad
                </div>
                <?php
                setcookie("cookieState", 0);
                break;
        
        default: setcookie("cookieState", 0);
    }}
    ?>
<?php
session_start();
if(isset($_SESSION["email"])){
    
    setCookie("cookieState", 0);
    header("Location: dashboard.php");
 
}else{ ?>

<FORM ACTION='login.php' METHOD='POST'>
Email: <input name='login' type='text'/>
Contraseña: <input name='pass'type='password'/>
<input type='submit' value='Enviar' class='enviar'></FORM>

<a href = "oauth-google/login.php">Google</a>
<?php
}

?>
    
</body>
</html>

