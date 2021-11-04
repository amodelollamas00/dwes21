<?php 
    include "Ejercicio_2.php";
    timeout();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Dashboard2</title>
    <style>
        *{
            color: <?php echo $_COOKIE["color"]?>;
        }
    </style>
</head>
<body>
    <?php 
    echo $_COOKIE["color"];
    if(!isset($_COOKIE["color"])){
        setcookie("color", $_POST["colores"], time() + 60 * 60 * 24 * 365, "/");
        header("Location:dashboard2.php");
    }
    
    if(isset($_SESSION["email"])){?>
        <a>Mi email es <?php echo $_SESSION["email"]?> y mi nombre es <?php echo $_SESSION["nombre"]?></a>
    <?php }else{header("Location:index.php");}
    ?>
    <a href="Logout.php">Logout</a>
</body>
</html>

