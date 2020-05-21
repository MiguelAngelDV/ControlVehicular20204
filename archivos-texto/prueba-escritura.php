<?php
    // Metodos de apertura.
    // "a" escribe al final del archivo, es decir al final del puntero.
    // "w" escribe en el archivo, trunca el archivo a 0.
    $manejador = fopen("informacion-alumno.txt","w");
    $texto = "Carrera: Informática";
    
    fputs($manejador, $texto);
    fclose($manejador);
?>