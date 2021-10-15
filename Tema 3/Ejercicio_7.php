<?php
//Crea un array con las fechas obtenidas de la BD MySql y ordenalas de manera desdendente con rsort;

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



foreach ($datos as $clave => $valor){
    $fecha_int = $valor["fecha_int"];
    $fecha_date = $valor["fecha_date"];
    $fecha_datetime = $valor["fecha_datetime"];
    $fecha_time = $valor["fecha_time"];
    $fecha_timestamp = $valor["fecha_timestamp"];

    $fechas = [date('Y-m-d H:i:s',$fecha_int), $fecha_date, $fecha_datetime, $fecha_time, $fecha_timestamp];
}
echo "estas son nuestras fechas sin ordenar <br>";

print_r($fechas);

foreach ($datos as $clave => $valor){
    
    
    $fecha_date = strtotime($fecha_date);
    $fecha_datetime = strtotime($fecha_datetime);
    $fecha_time = strtotime($fecha_time);
    $fecha_timestamp = strtotime($fecha_timestamp);

    $fechas = [$fecha_int, $fecha_date, $fecha_datetime, $fecha_time, $fecha_timestamp];
}

rsort($fechas);

$fechas2;

foreach($fechas as $clave){
    $fechas2[] = date('Y-m-d H:i:s', $clave);
}

echo "<br><br>Ahora ordenamos las fechas de forma inversa y las mostramos<br>";
print_r($fechas2);


?>