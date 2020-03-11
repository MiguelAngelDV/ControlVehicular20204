<?php
    // $Id=$_GET['Id'];
    // ===== Las variables se encuentran comentadas para su prueba en el DELETE
    // $Nombre=$_GET['Nombre'];
    // $Obsc=$_GET['Obsc'];
    // $FechaNacimiento=$_GET['FechaNacimiento'];
    // $Foto=$_GET['Foto'];
    // $Firma=$_GET['Firma'];
    // $Restriccion=$_GET['Restriccion'];
    // $Antiwuedad=$_GET['Antiuedad'];
    // $GrupoSanguineo=$_GET['GrupoSanguineo'];
    // $NumEmergencia=$_GET['NumEmergencia'];
    // $Donador=$_GET['Donador'];

    // print("Id: ".$Id."<br>");
    // print("Nombre: ".$Nombre."<br>");
    // print("FechaNacimiento: ".$FechaNacimiento."<br>");
    // print("GrupoSanguineo: ".$GrupoSanguineo."<br>");
    // print("Donador: ".$Donador."<br>");
    // print("NumEmergencia: ".$NumEmergencia."<br>");
    // print("Foto: ".$Foto."<br>");
    // print("Antiwuedad: ".$Antiwuedad."<br>");
    // print("Firma: ".$Firma."<br>");
    // print("Restriccion: ".$Restriccion."<br>");
    // print("Obsc: ".$Obsc."<br>");

    // Indicar donde acudir por la funciones
    include("Conexion.php");
    $conexion = Conectar();
    // $SQL = "INSERT INTO conductores VALUES('',
    //     '$Nombre','$Obsc','$FechaNacimiento','$Foto','$Firma','$Restriccion'
    //     '$Antiwuedad','$NumEmergencia','$GrupoSanguineo','$Donador');";
    $SQL = "SELECT * FROM agentes"; 
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