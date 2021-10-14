<?php
    //Obten el numero de valores iguales al valor 2 contenidos en un array de 10 valores
    //generados aleatoriamente con valores del 1 a 10.

    $arrayAleatorio;
    $cont=0;

    for($i=0; $i<10; $i++){
        $arrayAleatorio[$i]=rand(1,10);
        if($arrayAleatorio[$i]==2){
            $cont++;
        }
    }

    echo "El numero de 2 que a salido es ".$cont;


?>