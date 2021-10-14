<?php

$varTexto="hola";//cadena de texto
$varEntero=1234;// Entero
$varBoolean=true;//Booleano
$varFloat=1.2;//Float
$varArray=array("1","2");//Array

echo nl2br ("\nComprobando si son String\n");
echo nl2br ("varTexto\n");
if(is_string($varTexto)==1){
    echo nl2br("true\n");
}else{echo nl2br ("false\n");}

echo nl2br ("varEntero\n");
if(is_string($varEntero)==1){
    echo nl2br ("true\n");
}else{echo nl2br ("false\n");}

echo nl2br ("varBoolean\n");
if(is_string($varBoolean)==1){
    echo nl2br ("true\n");
}else{echo nl2br ("false\n");}

echo nl2br ("varFloat\n");
if(is_string($varFloat)==1){
    echo nl2br ("true\n");
}else{echo nl2br ("false\n");}

echo nl2br ("varArray\n");
if(is_string($varArray)==1){
    echo nl2br ("true\n");
}else{echo nl2br ("false\n");}

echo nl2br ("\nTransformando todos a string\n");

$varEntero=strval($varEntero);
$varBoolean=strval($varBoolean);
$varFloat=strval($varFloat);
$varFloat=strval($varFloat);
echo nl2br ("\n=============================================================================================================================\n");

echo nl2br ("\nTransformado\n");

echo nl2br ("\nVolviendo a comprobar\n");

echo nl2br ("varTexto\n");
if(is_string($varTexto)==1){
    echo nl2br ("true\n");
}else{echo nl2br ("false\n");}

echo nl2br ("varEntero\n");
if(is_string($varEntero)==1){
    echo nl2br ("true\n");
}else{echo nl2br ("false\n");}

echo nl2br ("varBoolean\n");
if(is_string($varBoolean)==1){
    echo nl2br ("true\n");
}else{echo nl2br ("false\n");}

echo nl2br ("varFloat\n");
if(is_string($varFloat)==1){
    echo nl2br ("true\n");
}else{echo nl2br ("false\n");}


//Para el array necesitamos recorrerlo primero cosa que aun no hemos dado
echo nl2br ("varArray\n");
if(is_string($varArray)==1){
    echo nl2br ("true\n");
}else{echo nl2br ("false\n");}

//extra

$cad = "11c234";
$cad = intval($cad);
echo $cad;//Solo coge los valores validos y al encontrarse uno invalido para

echo "<br/>";
//extra 2

define("cons1", "Alex ");
define("cons2", "Modelo");

echo "Mi nombre es ".cons1.cons2;

?>