<?php
// $NumLicencia se ha comentado porque no se envían ID's en los formularios.
    $NumLicencia=$_GET['NumLicencia'];
    // ===== Las variables se encuentran comentadas para su prueba en el DELETE ======
    $FechaExp=$_GET['FechaExp'];
    $FechaVencimiento=$_GET['FechaVencimiento'];
    $Estado=$_GET['Estado'];
    $Tipo=$_GET['Tipo'];
    $Conductor=$_GET['Conductor'];

    // Indicar donde acudir por la funciones
    // include("Conexion.php");
    // $conexion = Conectar();
    // $SQL = "INSERT INTO licencias VALUES('','$FechaVencimiento','$FechaExp','$Estado','$Tipo','$Conductor');";
    // $resultado = Consultar($conexion, $SQL);
    // if($resultado != NULL){
        print("El QUERY se ha realizado con éxito!<br>");
        // CSV
        $manejador = fopen("datosLicencias.csv", "a");
        $datos = array(
            array($_GET['NumLicencia'], $_GET['FechaExp'],$_GET['FechaVencimiento'],$_GET['Estado'],$_GET['Tipo'],$_GET['Conductor'])
        );
        foreach($datos as $linea){
            fputcsv($manejador,$linea);
        }
        fclose($manejador);
        // END CSV
        // START XML
        $xml = simplexml_load_file("../xml/licencias.xml");
        $licencia = $xml->Licencias->addChild('Licencia');
        $licencia->addChild('NumeroLicencia',$_GET['NumLicencia']);
        $licencia->addChild('FechaExpedicion',$_GET['FechaExp']);
        $licencia->addChild('FechaVencimiento',$_GET['FechaVencimiento']);
        $licencia->addChild('Estado',$_GET['Estado']);
        $licencia->addChild('Tipo',$_GET['Tipo']);
        $licencia->addChild('Conductor',$_GET['Conductor']);
        $xml->asXML("../xml/licencias.xml")
        


    // }else{
        // print("El QUERY ha fallado!");
    // }
    // Cerrar($conexion);
?>