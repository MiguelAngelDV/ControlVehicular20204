<?php
    $manejador = fopen("datos.csv","r");
    $fila = 0;
    $primeraLinea = fgets($manejador);
    $encabezado = explode(",", $primeraLinea);
    while($linea = fgets($manejador)){
        $datos = explode(",", $linea);
        $matriz[$fila] = $datos;
        $fila++;
    }
    print_r($matriz);
    fclose($manejador);
?>