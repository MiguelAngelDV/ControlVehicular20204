<?php
    // $Id=$_REQUEST['Id'];
    
    // LAs variables se encuentrasn comentadas para las pruebas de DELETE
    
    // $Motivo=$_REQUEST['Motivo'];
    // $Fecha=$_REQUEST['Fecha'];
    // $Hora=$_REQUEST['Hora'];
    // $Fundamento=$_REQUEST['Fundamento'];
    // $Lugar=$_REQUEST['Lugar'];
    // $Garantia=$_REQUEST['Garantia'];
    // $Obsc=$_REQUEST['Obsc'];
    // $Vehiculo=$_REQUEST['Vehiculo'];
    // $Licencia=$_REQUEST['Licencia'];
    // $Agente=$_REQUEST['Agente'];

    // print("Motivo: ".$Motivo."<br>");
    // print("Fecha: ".$Fecha."<br>");
    // print("Hora: ".$Hora."<br>");
    // print("Fundamento: ".$Fundamento."<br>");
    // print("Lugar: ".$Lugar."<br>");
    // print("Garantia: ".$Garantia."<br>");
    // print("Obsc: ".$Obsc."<br>");
    // print("Vehiculo: ".$Vehiculo."<br>");
    // print("Licencia: ".$Licencia."<br>");
    // print("Agente: ".$Agente."<br>");

    // Indicar donde acudir por la funciones
    include("Conexion.php");
    $conexion = Conectar();
    // $SQL = "INSERT INTO multas VALUES('','$Motivo','$Fecha','$Hora',
    // '$Fundamento','$Lugar','$Garantia','$Obsc','$Agente','$Vehiculo','$Licencia');";
    $SQL = "DELETE FROM multas WHERE Idmultas=1";
    $resultado = Consultar($conexion, $SQL);
    if($resultado){
        print("EL QUERY SE HA REALIZADO CON EXITO!<br>");
        print("Resultado: ".$resultado);
    }else{
        print("EL QUERY HA FALLADO!");
    }
    Cerrar($conexion);
?>