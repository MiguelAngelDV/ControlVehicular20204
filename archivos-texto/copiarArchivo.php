<?php
    $manejador = fopen("informacion.txt", "a+");
    $manejador2 = fopen("informacion2.txt", "w+");

    while(!feof($manejador)){
        $texto = fgets($manejador);
        print($texto)."<br>";
        fputs($manejador2, $texto);
    }
    fclose($manejador);
    fclose($manejador2);
?>