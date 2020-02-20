<?php
    // $Id=$_REQUEST['Id'];
    $Motivo=$_REQUEST['Motivo'];
    $Fecha=$_REQUEST['Fecha'];
    $Hora=$_REQUEST['Hora'];
    $Fundamento=$_REQUEST['Fundamento'];
    $Lugar=$_REQUEST['Lugar'];
    $Garantia=$_REQUEST['Garantia'];
    $Obsc=$_REQUEST['Obsc'];
    $Vehiculo=$_REQUEST['Vehiculo'];
    $Licencia=$_REQUEST['Licencia'];
    $Agente=$_REQUEST['Agente'];

    print("Motivo: ".$Motivo."<br>");
    print("Fecha: ".$Fecha."<br>");
    print("Hora: ".$Hora."<br>");
    print("Fundamento: ".$Fundamento."<br>");
    print("Lugar: ".$Lugar."<br>");
    print("Garantia: ".$Garantia."<br>");
    print("Obsc: ".$Obsc."<br>");
    print("Vehiculo: ".$Vehiculo."<br>");
    print("Licencia: ".$Licencia."<br>");
    print("Agente: ".$Agente."<br>");

    // Indicar donde acudir por la funciones
    include("Conexion.php");
    $conexion = Conectar();
    $SQL = "INSERT INTO multas VALUES('','$Motivo','$Fecha','$Hora',
    '$Fundamento','$Lugar','$Garantia','$Obsc','$Agente','$Vehiculo','$Licencia');";
    $resultado = Consultar($conexion, $SQL);
    print("Resultado: ".$resultado);
    Cerrar($conexion);
?>