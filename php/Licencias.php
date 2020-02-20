<?php
    // $NumLicencia=$_GET['NumLicencia'];
    $FechaExp=$_GET['FechaExp'];
    $FechaVencimiento=$_GET['FechaVencimiento'];
    $Estado=$_GET['Estado'];
    $Tipo=$_GET['Tipo'];
    $Conductor=$_GET['Conductor'];

    print("FechaExp: ".$FechaExp."<br>");
    print("FechaVencimiento: ".$FechaVencimiento."<br>");
    print("Estado: ".$Estado."<br>");
    print("Tipo: ".$Tipo."<br>");
    print("Conductor: ".$Conductor."<br>");

    // Indicar donde acudir por la funciones
    include("Conexion.php");
    $conexion = Conectar();
    $SQL = "INSERT INTO licencias VALUES('','$FechaVencimiento','$FechaExp','$Estado','$Tipo','$Conductor');";
    $resultado = Consultar($conexion, $SQL);
    print("Resultado: ".$resultado);
    Cerrar($conexion);
?>