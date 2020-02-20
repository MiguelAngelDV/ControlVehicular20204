<?php
    // No se obtiene la clave ya que esta en la BD y se asigna de manera automatica
    // $Clave=$_POST['Clave'];
    $Nombre=$_POST['Nombre'];
    print("Nombre: ".$Nombre."<br>");
    // Conexion
    // Indicar donde acudir por la funciones
    include("Conexion.php");
    $conexion = Conectar();
    $SQL = "INSERT INTO agentes VALUES('','$Nombre');";
    $resultado = Consultar($conexion, $SQL);
    print("Resultado: ".$resultado);
    Cerrar($conexion);
?>