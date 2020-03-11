<?php
    // $Id=$_REQUEST['Id']; 
    // $Tipo=$_REQUEST['Tipo'];
    // $Dictamen=$_REQUEST['Dictamen'];
    // $Periodo=$_REQUEST['Periodo'];
    // $Vigencia=$_REQUEST['Vigencia'];
    // $CentroVerificador=$_REQUEST['CentroVerificador'];

    // print("Tipo: ".$Tipo."<br>");
    // print("Dictamen: ".$Dictamen."<br>");
    // print("Periodo: ".$Periodo."<br>");
    // print("Vigencia: ".$Vigencia."<br>");
    // print("CentroVerificador: ".$CentroVerificador."<br>");

    // Indicar donde acudir por la funciones
    include("Conexion.php");
    $conexion = Conectar();
    //==== SQL de Inserción de datos ====
    // $SQL = "INSERT INTO verificaciones VALUES('','$Tipo','$Dictamen','$Periodo','$Vigencia','$CentroVerificador');";
    // $SQL = "DELETE FROM verificaciones WHERE idVerificaciones=2";
    $SQL = "SELECT * FROM verificaciones";
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