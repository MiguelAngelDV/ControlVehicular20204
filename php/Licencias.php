<?php
// $NumLicencia se ha comentado porque no se envían ID's en los formularios.
    // $NumLicencia=$_GET['NumLicencia'];

    // ===== Las variables se encuentran comentadas para su prueba en el DELETE ======
    // $FechaExp=$_GET['FechaExp'];
    // $FechaVencimiento=$_GET['FechaVencimiento'];
    // $Estado=$_GET['Estado'];
    // $Tipo=$_GET['Tipo'];
    // $Conductor=$_GET['Conductor'];

    // print("FechaExp: ".$FechaExp."<br>");
    // print("FechaVencimiento: ".$FechaVencimiento."<br>");
    // print("Estado: ".$Estado."<br>");
    // print("Tipo: ".$Tipo."<br>");
    // print("Conductor: ".$Conductor."<br>");

    // Indicar donde acudir por la funciones
    include("Conexion.php");
    $conexion = Conectar();
    // $SQL = "INSERT INTO licencias VALUES('','$FechaVencimiento','$FechaExp','$Estado','$Tipo','$Conductor');";
    // $SQL = "DELETE FROM licencias WHERE Idlicencia=1";
    $SQL = "SELECT * FROM licencias";
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