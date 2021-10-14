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

    $consulta="SELECT * FROM usuarios";

    //SELECCIONAMOS LA BASE DE DATOS

    mysqli_select_db($conn,"medac");

    //EJECUTAMOS LA CONSULTA A BD

    $datos=mysqli_query ($conn,$consulta);

    //RECORREMOS EL ARRAY

    foreach ($datos as $clave => $valor){
        $fecha_int = $valor["fecha_int"];
        $fecha_date = $valor["fecha_date"];
        $fecha_datetime = $valor["fecha_datetime"];
        $fecha_time = $valor["fecha_time"];
        $fecha_timestamp = $valor["fecha_timestamp"];

        $fecha_int = date('Y-m-d H:i:s', $fecha_int);

        echo "FECHAS SIN CAMBIAR </br>";
        echo "=================================================================================================</br>";

        echo "Esta es la fecha_int => ".date('Y-m-d H:i:s', strtotime($fecha_int))."</br>";
        echo "Esta es la fecha_date => ".date('Y-m-d H:i:s', strtotime($fecha_date))."</br>";
        echo "Esta es la fecha_datetime => ".date('Y-m-d H:i:s', strtotime($fecha_datetime))."</br>";
        echo "Esta es la fecha_time => ".date('Y-m-d H:i:s', strtotime($fecha_time))."</br>";
        echo "Esta es la fecha_timestamp => ".date('Y-m-d H:i:s', strtotime($fecha_timestamp))."</br></br>"; 

        echo "FECHAS -15 DIAS </br>";
        echo "=================================================================================================</br>";

        echo "Esta es la fecha_int => ".date('Y-m-d H:i:s', strtotime($fecha_int.'-15 day'))."</br>";
        echo "Esta es la fecha_date => ".date('Y-m-d H:i:s', strtotime($fecha_date.'-15 day'))."</br>";
        echo "Esta es la fecha_datetime => ".date('Y-m-d H:i:s', strtotime($fecha_datetime.'-15 day'))."</br>";
        echo "Esta es la fecha_time => ".date('Y-m-d H:i:s', strtotime($fecha_time.'-15 day'))."</br>";
        echo "Esta es la fecha_timestamp => ".date('Y-m-d H:i:s', strtotime($fecha_timestamp.'-15 day'))."</br>";
    }

?>