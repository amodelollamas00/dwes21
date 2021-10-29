<?php

 /*CONEXION A BASE DE DATOS*/

 $servername = "localhost";
 $database = "medac";
 $username = "root";
 $password = "";

 //Create conection
 $conn = mysqli_connect($servername, $username, $password, $database);

 //Check connection
 if(!$conn){
     die("Connetion failed: ".mysqli_connect_error());
 }

 echo "Conectado correctamente"."</br>";

 //Preparamos sentencia SQL

    $mail = $_POST["login"];
    $contraseña = $_POST["pass"];

 $consulta="SELECT email, password, nombre FROM usuarios WHERE email = '".$mail."' && password = '".$contraseña."'";

 //SELECCIONAMOS LA BASE DE DATOS

 mysqli_select_db($conn,"medac");

 $datos = mysqli_query ($conn,$consulta);

 
 function existeUsuario($datos){  
     
 if($datos -> num_rows > 0){
     
    foreach ($datos as $clave => $valor){
        session_start();
        $_SESSION["nombre"] = $valor["nombre"]; 
        return True;
    }
 }else{return False;}
}

 if(existeUsuario($datos)){
 $_SESSION["email"]=$mail;

 echo $_SESSION["email"];
 echo "<br>";
 echo $_SESSION["nombre"];
 }else{
     
    setCookie("cookieState", 2);
    header("Location: index.php");

    echo "nada";
    
 }
?>