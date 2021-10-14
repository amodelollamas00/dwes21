<?php
    $varTexto="hola";//cadena de texto
    $varEntero=1234;// Entero
    $varBoolean=true;//Booleano
    $varFloat=1.2;//Float
    $varArray=array("1","2");//Array
    
    //El salto de carro es <br/>

    echo "Variable de tipo cadena de texto".$varTexto."<br/>";
    echo "Variable de tipo Entero".$varEntero."<br/>";
    echo "Variable de tipo Float".$varFloat."<br/>";
    echo "Variable de tipo Booleano".$varBoolean."<br/>";
    echo "Variable de tipo Compuesto"; print_r($varArray);//funcion para mostrar array

?>