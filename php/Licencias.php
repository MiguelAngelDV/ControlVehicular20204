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
    $SQL = "DELETE FROM licencias WHERE Idlicencia=1";
    $resultado = Consultar($conexion, $SQL);
    if($resultado){
        print("EL QUERY SE HA REALIZADO CON EXITO!<br>");
        print("Resultado: ".$resultado);
    }else{
        print("EL QUERY HA FALLADO!");
    }
    Cerrar($conexion);
?>