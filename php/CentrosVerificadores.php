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
    // $SQL = "DELETE FROM centroverificaciones WHERE Idverificaciones=1";
    $SQL = "SELECT * FROM centroverificaciones";
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