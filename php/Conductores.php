<?php
    // $Id=$_GET['Id'];
    $Nombre=$_GET['Nombre'];
    $Obsc=$_GET['Obsc'];
    $FechaNacimiento=$_GET['FechaNacimiento'];
    $Foto=$_GET['Foto'];
    $Firma=$_GET['Firma'];
    $Restriccion=$_GET['Restriccion'];
    $Antiwuedad=$_GET['Antiuedad'];
    $GrupoSanguineo=$_GET['GrupoSanguineo'];
    $NumEmergencia=$_GET['NumEmergencia'];
    $Donador=$_GET['Donador'];

    // print("Id: ".$Id."<br>");
    print("Nombre: ".$Nombre."<br>");
    print("FechaNacimiento: ".$FechaNacimiento."<br>");
    print("GrupoSanguineo: ".$GrupoSanguineo."<br>");
    print("Donador: ".$Donador."<br>");
    print("NumEmergencia: ".$NumEmergencia."<br>");
    print("Foto: ".$Foto."<br>");
    print("Antiwuedad: ".$Antiwuedad."<br>");
    print("Firma: ".$Firma."<br>");
    print("Restriccion: ".$Restriccion."<br>");
    print("Obsc: ".$Obsc."<br>");

    // Indicar donde acudir por la funciones
    include("Conexion.php");
    $conexion = Conectar();
    $SQL = "INSERT INTO conductores VALUES('',
        '$Nombre','$Obsc','$FechaNacimiento','$Foto','$Firma','$Restriccion'
        '$Antiwuedad','$NumEmergencia','$GrupoSanguineo','$Donador');";
    $resultado = Consultar($conexion, $SQL);
    print("Resultado: ".$resultado);
    Cerrar($conexion);
?>