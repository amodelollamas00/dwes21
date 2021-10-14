<?php
   
//Quítale las tildes a la cadena Álvaro ha estudiado Ingeniería electrónica en la Universidad de
//Córdoba"
   
   echo $Cad = "Álvaro ha estudiado Ingeniería electrónica en la Universidad de
    Córdoba <br/>";
    $Cad = str_replace("Á","A",$Cad);
    $Cad = str_replace("É","E",$Cad);
    $Cad = str_replace("Í","I",$Cad);
    $Cad = str_replace("Ó","O",$Cad);
    $Cad = str_replace("Ú","U",$Cad);
    $Cad = str_replace("á","a",$Cad);
    $Cad = str_replace("é","e",$Cad);
    $Cad = str_replace("í","i",$Cad);
    $Cad = str_replace("ó","o",$Cad);
    $Cad = str_replace("ú","u",$Cad);

//¿Cuántos caracteres tiene la cadena de texto?
    $num = strlen($Cad);
    echo "La cantidad de caracteres de esta frase son ".$num."<br/>";

//reset de la cadena
    $Cad = "Álvaro ha estudiado Ingeniería electrónica en la Universidad de
    Córdoba";

//Convierte la cadena original a mayúsculas.
    $Cad = strtoupper($Cad);
    echo $Cad."<br/>";
    
//Quita las tildes y los espacios a la cadena de texto"74635498 B Rubén González Diaz
    $Cad = "74635498 B Rubén González Diaz";
    $Cad = str_replace("Á","A",$Cad);
    $Cad = str_replace("É","E",$Cad);
    $Cad = str_replace("Í","I",$Cad);
    $Cad = str_replace("Ó","O",$Cad);
    $Cad = str_replace("Ú","U",$Cad);
    $Cad = str_replace("á","a",$Cad);
    $Cad = str_replace("é","e",$Cad);
    $Cad = str_replace("í","i",$Cad);
    $Cad = str_replace("ó","o",$Cad);
    $Cad = str_replace("ú","u",$Cad);
    $Cad = str_replace(" ","",$Cad);
    echo $Cad;


?>