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
    $SQL = "SELECT * FROM vehiculo";
    $resultado = Consultar($conexion, $SQL);
    if($resultado != NULL){
        print("El QUERY se ha realizado con éxito!<br>");
        // $n es el numero de de filas afectadas por la consulta SELECT
        // $C es el numero de de columnas afectadas por la consulta SELECT
        $c = mysqli_num_fields($resultado);
        $n = mysqli_num_rows($resultado);
        print("El numero de filas afectadas es: ".$n."<br>");
        print("El numero de columnas de la consulta es: ".$c."<br>");
        for($f=0; $f<$n; $f++){
            print("-----Datos-----"."<br>");
            $fila = mysqli_fetch_row($resultado);
            for($x=0;$x<$c;$x++){
                print($fila[$x]."<br>");
            }
        }
    }else{
        print("El QUERY ha fallado!");
    }
    Cerrar($conexion);
?>