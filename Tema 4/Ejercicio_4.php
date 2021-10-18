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

 //EJECUTAMOS LA CONSULTA A BD

 $datos=mysqli_query ($conn,$consulta);

 $mail = $_GET["mail"];

 foreach ($datos as $clave => $valor){
    $BDmail = $valor["mail"];

    if($mail == $valor["mail"]){
        echo "El email existe en la base de datos";
    }
    else{
        echo "El email no existe en la base de datos";
    }
 }

?>