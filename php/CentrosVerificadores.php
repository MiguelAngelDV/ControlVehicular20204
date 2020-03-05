<?php
    // $Id=$_POST['Id'];
    // LAs variables se encuentrasn comentadas para las pruebas de DELETE
    // $Domicilio=$_POST['Domicilio'];
    // $Telefono=$_POST['Telefono'];
    // $Nombre=$_POST['Nombre'];
    
    // print("Nombre: ".$Nombre."<br>");
    // print("Domicilio: ".$Domicilio."<br>");
    // print("Telefono: ".$Telefono."<br>");

    // Indicar donde acudir por la funciones
    include("Conexion.php");
    $conexion = Conectar();
    // $SQL = "INSERT INTO centroverificaciones VALUES('','$Domicilio','$Telefono','$Nombre');";
    $SQL = "DELETE FROM centroverificaciones WHERE Idverificaciones=1";
    $resultado = Consultar($conexion, $SQL);
    if($resultado){
        print("El QUERY se ha realizado con éxito!<br>");
        print("El resultado: ".$resultado);
    }else{
        print("El QUERY ha fallado!");
    }
    Cerrar($conexion);
?>