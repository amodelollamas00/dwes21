<?php
//Crea la función fibonacci que reciba por parámetro la cantidad de elementos 
//que se desea obtener de la serie Fibonacci (si no se especifica nada por defecto obtendrá los 10 primeros),
//y devuelva un array con dicha sucesión de números.
 
$numero = $_GET["numero"];
$v1;

if($numero == null){
    $numero = 10;
}

 function fibonacci($numero = 10){
    $vfibonacci  = [1,2];
 
  for($i=1;$i<$numero-1;$i++)
    {
        $vfibonacci[] = $vfibonacci[$i]+$vfibonacci[$i-1];
    }
    return $vfibonacci;
 }

 print_r(fibonacci($numero));
?>