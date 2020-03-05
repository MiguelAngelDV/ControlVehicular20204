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
    //==== SQL de Inserción de datos ====
    // $SQL = "INSERT INTO verificaciones VALUES('','$Tipo','$Dictamen','$Periodo','$Vigencia','$CentroVerificador');";
    $SQL = "DELETE FROM verificaciones WHERE idVerificaciones=2";
    $resultado = Consultar($conexion, $SQL);
    if($resultado){
        print("Query realizado con exito!<br>");
        print("Resultado: ".$resultado);
    }else{
        print("El Query ha fallado!");
    }
    Cerrar($conexion);
?>