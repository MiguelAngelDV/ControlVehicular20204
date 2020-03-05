<?php
    // $NIV=$_REQUEST['NIV'];
    // $Origen=$_REQUEST['Origen'];
    // $Placa=$_REQUEST['Placa'];
    // $Modelo=$_REQUEST['Modelo'];
    // $Marca=$_REQUEST['Marca'];
    // $Serie=$_REQUEST['Serie'];
    // $Tipo=$_REQUEST['Tipo'];
    // $Capacidad=$_REQUEST['Capacidad'];
    // $Version=$_REQUEST['Version'];
    // $Aseguradora=$_REQUEST['Aseguradora'];
    // $Transmision=$_REQUEST['Transmision'];
    // $Cilindraje=$_REQUEST['Cilindraje'];
    // $Combustible = $_REQUEST['Combustible'];
    // $NoMotor=$_REQUEST['NoMotor'];
    // $Color=$_REQUEST['Color'];
    // $NoPuertas=$_REQUEST['NoPuertas'];
    // $Uso=$_REQUEST['Uso'];
    // $Verificaciones = $_REQUEST['Verificaciones'];
    // $Propietario = $_REQUEST['Propietario'];

    // print("NIV: ".$NIV."<br>");
    // print("Origen: ".$Origen."<br>");
    // print("NoPuertas: ".$NoPuertas."<br>");
    // print("Transmision: ".$Transmision."<br>");
    // print("Cilindraje: ".$Cilindraje."<br>");
    // print("Marca: ".$Marca."<br>");
    // print("Modelo: ".$Modelo."<br>");
    // print("Serie: ".$Serie."<br>");
    // print("Capacidad: ".$Capacidad."<br>");
    // print("Tipo: ".$Tipo."<br>");
    // print("Uso: ".$Uso."<br>");
    // print("Version: ".$Version."<br>");
    // print("Color: ".$Color."<br>");
    // print("Aseguradora: ".$Aseguradora."<br>");
    // print("Placa: ".$Placa."<br>");
    // print("NoMotor: ".$NoMotor."<br>");
    // print("Propietario: ".$Propietario."<br>");

    // Indicar donde acudir por la funciones
    include("Conexion.php");
    $conexion = Conectar();
    // $SQL = "INSERT INTO vehiculo VALUES('','$NIV','$Origen','$NoPuertas','$Transmision','$Cilindraje','$Marca','$Modelo',
    // '$Serie','$Capacidad','$Tipo','$Uso',
    // '$Version','$Color','$Aseguradora','$Placa',
    // '$NoMotor','$Propietario','$Combustible','$Verificaciones');";
    $SQL = "DELETE FROM vehiculos WHERE Idvehiculo=1";
    $resultado = Consultar($conexion, $SQL);
    if($resultado){
        print("EL QUERY SE HA REALIZADO CON EXITO!<br>");
        print("Resultado: ".$resultado);
    }else{
        print("EL QUERY HA FALLADO");
    }
    Cerrar($conexion);
?>