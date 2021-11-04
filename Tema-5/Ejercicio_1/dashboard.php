
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
    <title>Dashboard</title>
</head>
<body>
    
<?php
    if(isset($_SESSION["email"])){?>
    <a>Mi email es <?php echo $_SESSION["email"]?> y mi nombre es <?php echo $_SESSION["nombre"]?></a>
    <?php echo "<br>";
    setcookie("color", null, 1, "/");
?>
    <a href="logout.php">Logout</a>

<form action="dashboard2.php" method="POST">
  <p>Escoge tu color de texto:</p>
  <div>
    <input type="radio" id="colores" name="colores" value="red">
    <label for="Rojo">rojo</label>

    <input type="radio" id="colores" name="colores" value="green">
    <label for="Verde">verde</label>

    <input type="radio" id="colores" name="colores" value="blue">
    <label for="Azul">azul</label>
  </div>
  <div>
    <button type="submit">Submit</button>
  </div>
  </form>
<?php
    }
    else{header("Location:index.php");
    setcookie("cookieState",1);}
?>

</body>
</html>