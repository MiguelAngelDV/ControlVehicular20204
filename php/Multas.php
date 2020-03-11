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
    // $SQL = "DELETE FROM multas WHERE Idmultas=1";
    $SQL = "SELECT * FROM multas"; 
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