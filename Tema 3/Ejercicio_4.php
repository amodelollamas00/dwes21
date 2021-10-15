<?php
    //En un array de 10 valores numericos obten el valor maximo
    echo "Creando el array <br>";
    echo "==================================================================== <br><br>";
    $numeros = array(5,21,13,4,65,3,7,64,9,10);

    echo "Ordenando el array <br>";
    echo "==================================================================== <br><br>";
    sort($numeros);

    echo "El numero mayor es la ultima posicion que es ".$numeros[9];
?>