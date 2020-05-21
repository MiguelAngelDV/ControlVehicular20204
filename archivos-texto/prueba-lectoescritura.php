<?php 
    $manejador = fopen("informacion-alumno.txt", "a+");
    // Lectura
    $texto = fgets($manejador);
    print($texto);
    // Escritura.
    fwrite($manejador, "Fin de archivo");
    fclose($manejador);
?>