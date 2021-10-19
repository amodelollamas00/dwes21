<?php
//Crea la función existeUsuario que reciba por parámetro un email y contraseña, conecte a la base de datos MEDAC y
//consulte en la tabla usuarios si existe, devolviendo true si ha encontrado el usuario o false en caso contrario.

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

 $consulta="SELECT mail FROM usuarios";

 //SELECCIONAMOS LA BASE DE DATOS

 mysqli_select_db($conn,"medac");

 $datos = mysqli_query ($conn,$consulta);

    $mail = $_GET["mail"];

 function existeUsuario($mail, $datos){    

    foreach ($datos as $clave => $valor){

        $BDmail = $valor["mail"];

        if($mail == $BDmail){
            return "El email -$mail- existe en la base de datos";
        }
        else{
            return "El email -$mail- no existe en la base de datos";
        }
    }
 }

 echo existeUsuario($mail, $datos);
?>