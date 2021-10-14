<?php

$dado1=2;
$dado2=3;
$dado3=6;

if($dado1 == 6 && $dado2 == 6 && $dado3 == 6){
    echo "Excelente";
}else if($dado1 == 6 && $dado2 == 6 || $dado3 == 6 && $dado1 == 6 || $dado3 == 6 && $dado2 == 6){
    echo "Muy Bien";
}else if($dado1 == 6 || $dado2 == 6 || $dado3 == 6){
    echo "Regular";
}else{ echo "Pesimo";}

?>