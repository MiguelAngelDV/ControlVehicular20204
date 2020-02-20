<?php
    // $Id=$_REQUEST['Id'];
    $Tipo=$_REQUEST['Tipo'];
    $Dictamen=$_REQUEST['Dictamen'];
    $Periodo=$_REQUEST['Periodo'];
    $Vigencia=$_REQUEST['Vigencia'];
    $CentroVerificador=$_REQUEST['CentroVerificador'];

    print("Tipo: ".$Tipo."<br>");
    print("Dictamen: ".$Dictamen."<br>");
    print("Periodo: ".$Periodo."<br>");
    print("Vigencia: ".$Vigencia."<br>");
    print("CentroVerificador: ".$CentroVerificador."<br>");

    // Indicar donde acudir por la funciones
    include("Conexion.php");
    $conexion = Conectar();
    $SQL = "INSERT INTO verificaciones VALUES('','$Tipo','$Dictamen','$Periodo','$Vigencia','$CentroVerificador');";
    $resultado = Consultar($conexion, $SQL);
    print("Resultado: ".$resultado);
    Cerrar($conexion);
?>