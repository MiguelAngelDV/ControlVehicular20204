<?php
    // $Id=$_POST['Id'];
    $Domicilio=$_POST['Domicilio'];
    $Telefono=$_POST['Telefono'];
    $Nombre=$_POST['Nombre'];
    
    print("Nombre: ".$Nombre."<br>");
    print("Domicilio: ".$Domicilio."<br>");
    print("Telefono: ".$Telefono."<br>");

    // Indicar donde acudir por la funciones
    include("Conexion.php");
    $conexion = Conectar();
    $SQL = "INSERT INTO centroverificaciones VALUES('','$Domicilio','$Telefono','$Nombre');";
    $resultado = Consultar($conexion, $SQL);
    print("Resultado: ".$resultado);
    Cerrar($conexion);
?>