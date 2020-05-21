<?php
// Apertura del archivo
$manejador = fopen("informacion.txt","r");
    
while(!feof($manejador)){
    $texto = fgets($manejador);
    print($texto)."<br>";
}
fclose($manejador);
?>