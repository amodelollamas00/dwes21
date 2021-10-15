<?php
//Crea una matriz de 10 x 10 y calcula la suma de la diagonal principal y la suma de la diagonal secundaria y
//muestre por pantalla la diferencia de ambas

    $Matriz;
    $Mayor = 0;
    $Menor = 0;

    for($k=0; $k<10; $k++){
        for($j=0; $j<10; $j++){
            $Matriz[$k][$j]=rand(0,9);
            if($k==$j){
                $Mayor += $Matriz[$k][$j];
            }

            if($k+$j == sizeof($Matriz)){
                $Menor += $Matriz[$k][$j];
            }
        }
    }

    echo "Imprimimos nuestra matriz <br><br>";

    for($k=0; $k<10; $k++){
        echo "(";
        for($j=0; $j<10; $j++){
            echo $Matriz[$k][$j]." ";
        }
        echo ") <br> ";
    }

    echo "<br> La suma de la diagonal mayor da $Mayor <br>";
    echo "La suma de la diagonal mayor da $Menor <br>";

    echo "La diferencia entre las dos es ".$Mayor-$Menor;
?>