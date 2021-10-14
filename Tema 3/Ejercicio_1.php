<?php

//Crea un programa que calcule el indice de masa corporal

$peso = $_GET["peso"];
$altura = $_GET["altura"];

$varIMC = $peso/($altura**2);

echo "$varIMC </br>";

if($varIMC<18.5){
    echo "Bajo peso";
}else if($varIMC>=18.5 && $varIMC<=24.9){
    echo "Normopeso";
}else if($varIMC>=25 && $varIMC<=26.9){
    echo "Sobrepeso grado I";
}else if($varIMC>=27 && $varIMC<=29.9){
    echo "Sobrepeso grado II";
}else if($varIMC>=30 && $varIMC<=34.9){
    echo "Obesidad tipo I";
}else if($varIMC>=35 && $varIMC<=39.9){
    echo "Obesidad tipo II";
}else if($varIMC>=40 && $varIMC<=49.9){
    echo "Obesidad tipo III(mórbida)";
}else if($varIMC>=50){
    echo "Obesidad tipo IV(extrema)";
}



?>