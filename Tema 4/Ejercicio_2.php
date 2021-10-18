<?php
//Crea la función esBisiesto que reciba por parámetro una fecha en formato “dd-mm-aaaa” y devuelva un booleano
//indicando true si el día es bisiesto o false en caso contrario.

 $fecha = strtotime($_GET["fecha"]);

    $año = date("Y",$fecha);

    if($año%4 == 0){
        echo "El año introducido -$año- es bisiesto";
    }
    else{
        echo "El año introducido -$año- no es bisiesto";
    }
?>