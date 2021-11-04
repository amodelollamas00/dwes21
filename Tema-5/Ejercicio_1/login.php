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
        $_SESSION["email"]= $valor["email"];
        return True;
    }
 }else{return False;}
}

 if(existeUsuario($datos)){
   setCookie("cookieState", 0);
  // $_SESSION["email"]=$mail;

 header("Location: dashboard.php");
 }else{
     
    setCookie("cookieState", 1);
    header("Location: index.php");

    
 }
?>