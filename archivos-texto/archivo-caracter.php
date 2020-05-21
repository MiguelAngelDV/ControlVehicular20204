<?php
// Apertura del archivo
$manejador = fopen("informacion.txt","r");
    
// while($char = fgetc($manejador)){
//     if($char == "\n"){
//         $char = "<br/>";
//     }
//     print($char);
// }
// fclose($manejador);

while(!feof($manejador)){
    $char = fgetc($manejador);
    if($char == "\n"){
        $char = "<br>";
    }
    print($char);
}
?>