<?php
//Crea la función esBisiesto que reciba por parámetro una fecha en formato “dd-mm-aaaa” y devuelva un booleano
//indicando true si el día es bisiesto o false en caso contrario.

 $fecha = strtotime($_GET["fecha"]);

 function esBisiesto($fecha){
    $año = date("Y",$fecha);

    /*Esta es la forma sin funcion de hacerlo.
    if($año%4 == 0){
        echo "El año introducido -$año- es bisiesto";
    }
    else{
        echo "El año introducido -$año- no es bisiesto";
    }*/

    echo (date('L', strtotime("$año-01-01")) ? "El año introducido -$año- es bisiesto" : "El año introducido -$año- no es bisiesto");
}

    esBisiesto ($fecha);
?>