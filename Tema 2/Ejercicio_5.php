<?php
//Quitale las tilde a la cadena pero esta vez con array
    
    echo $Cad = "Álvaro ha estudiado Ingeniería electrónica en la Universidad de
    Córdoba <br/>";

    $arrayTilde=array("á","é","í","ó","ú","Á","É","Í","Ó","Ú");
    $arraySinTilde=array("a","e","i","o","u","A","E","I","O","U");

    $Cad = str_replace($arrayTilde,$arraySinTilde,$Cad);

    echo "$Cad <br/>";


//Quita las tildes y los espacios a la cadena de texto “74635498 B Rubén González Díaz”

    echo $Cad = "74635498 B Rubén González Díaz <br/>"; 

    $arrayTilde=array("á","é","í","ó","ú","Á","É","Í","Ó","Ú");
    $arraySinTilde=array("a","e","i","o","u","A","E","I","O","U");

    $Cad = str_replace($arrayTilde,$arraySinTilde,$Cad);

    $Cad = str_replace(" ","",$Cad);
    echo $Cad;


//Crea un array de 20 elementos de tipo real, en el que cada elemento representa la venta del día de un comercio. 
//Calcular el promedio de venta por día y mostrarlo por pantalla.

    $Cad = array(10,20,30,25,15,50,10,10,20,30,23,45,63,13,25,43,25,67,54,20);
    $media=0;

    foreach($Cad as $val){

        $media+=$val;

    }

    $media /= count($Cad);

    echo "<br/> La media de ganancias de la tienda es $media <br/><br/>";


//Muestra estas tablas en HTML usando arrays.

    $Cad = array("Paco"=>40,"Alex"=>21,"Fran"=>15);

    echo '<table border="1">';//aqui inicias la tabla y pones su borde
    echo '<tr> 
          <th>Persona</th>
          <th>Edad</th>
          </tr>';
    

    foreach ( $Cad as $r => $val ) {//aqui recorres 
        echo '<tr>';
        
                echo '<td>'.$r.'</td>';
                echo '<td>'.$val.'</td>';
        
        echo '</tr>';
    }
    echo '</table>';

    
    $Cad = array("Paco"=>array("40","1.80"),"Alex"=>array("21","1.87"),"Fran"=>array("15","1.70"));

    echo "<br/><br/>";

    echo '<table border="1">';//aqui inicias la tabla y pones su borde

    echo '<tr> 
          <th>Persona</th>
          <th>Edad</th>
          <th>Altura</th>
          </tr>';

    foreach ( $Cad as $r => $val) {//aqui recorres 
        echo '<tr>';
        
        echo '<td>'.$r.'</td>';
        echo '<td>'.$val[0].'</td>';
        echo '<td>'.$val[1].'</td>';
        
        echo '</tr>';   
    }

    echo '<tr>
          <td colspan = "2">Total</td>
          <td>5.37</td>
          </tr>';

    echo '</table>';

?>