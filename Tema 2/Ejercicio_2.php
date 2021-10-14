<?php

    $simple='Simple \n salto de linea\n';
    $doble="\nComillas dobles \n salto de linea\n";
    echo nl2br ($simple);
    echo nl2br ($doble);

    $nombre="Alejandro Modelo Llamas";
    echo nl2br("Este es mi nombre $nombre\n");
    echo nl2br('Esta es mi variable $nombre'."\n");
    echo nl2br('Esto pone en mi variable $nombre '.$nombre);

?>