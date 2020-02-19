<?php
    $NIV=$_REQUEST['NIV'];
    $Origen=$_REQUEST['Origen'];
    $NoPuertas=$_REQUEST['NoPuertas'];
    $Transmision=$_REQUEST['Transmision'];
    $Cilindraje=$_REQUEST['Cilindraje'];
    $Marca=$_REQUEST['Marca'];
    $Modelo=$_REQUEST['Modelo'];
    $Serie=$_REQUEST['Serie'];
    $Capacidad=$_REQUEST['Capacidad'];
    $Tipo=$_REQUEST['Tipo'];
    $Uso=$_REQUEST['Uso'];
    $Version=$_REQUEST['Version'];
    $Color=$_REQUEST['Color'];
    $Aseguradora=$_REQUEST['Aseguradora'];
    $Placa=$_REQUEST['Placa'];
    $NoMotor=$_REQUEST['NoMotor'];
    $Propietario=$_REQUEST['Propietario'];

    print("NIV: ".$NIV."<br>");
    print("Origen: ".$Origen."<br>");
    print("NoPuertas: ".$NoPuertas."<br>");
    print("Transmision: ".$Transmision."<br>");
    print("Cilindraje: ".$Cilindraje."<br>");
    print("Marca: ".$Marca."<br>");
    print("Modelo: ".$Modelo."<br>");
    print("Serie: ".$Serie."<br>");
    print("Capacidad: ".$Capacidad."<br>");
    print("Tipo: ".$Tipo."<br>");
    print("Uso: ".$Uso."<br>");
    print("Version: ".$Version."<br>");
    print("Color: ".$Color."<br>");
    print("Aseguradora: ".$Aseguradora."<br>");
    print("Placa: ".$Placa."<br>");
    print("NoMotor: ".$NoMotor."<br>");
    print("Propietario: ".$Propietario."<br>");

    // Indicar donde acudir por la funciones
    include("Conexion.php");
    $conexion = Conectar();
    $SQL = "INSERT INTO vehiculo VALUES('','$RFC','$Nombre','$Domicilio');";
    $resultado = Consultar($conexion, $SQL);
    print("Resultado: ".$resultado);
    Cerrar($conexion);
?>