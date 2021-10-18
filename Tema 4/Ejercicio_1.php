<?php

//Crea la función esPrimo que reciba por parámetro un entero y devuelva un booleano
//indicando true si es primo o falso en caso contrario.

    $numero = $_GET["numero"];

    function esPrimo($numero){
        if ($numero == 0 || $numero == 1 || $numero == 4) {
            return false;
          }
          for ($x = 2; $x < $numero / 2; $x++) {
            
            if ($numero % $x == 0)
              return false;
          }
          
          return true;
    }

    if(esPrimo($numero)){
      echo "La funcion devuelve True";
    }else{
      echo "La funcion devuelve False";
    }
    

?>