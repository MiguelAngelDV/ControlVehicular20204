<?php
    // No se obtiene la clave ya que esta en la BD y se asigna de manera automatica.
    // Las variables se encuentran comentadas para realizar las pruebas del DELETE.
    $Clave=$_POST['Clave'];
    $Nombre=$_POST['Nombre'];
    print("Nombre: ".$Nombre."<br>");

    // ===================================
    // Conexion
    // Indicar donde acudir por la funciones
    // ====================================
    include("Conexion.php");
    $conexion = Conectar();
    //  ===== Inserción a la base de datos =====
    $SQL = "INSERT INTO agentes VALUES('','$Nombre');";
    $resultado = Consultar($conexion,$SQL);
    if($resultado != NULL){
        print("El QUERY se ha realizado con éxito!<br>");
        $manejador = fopen("datosAgentes.csv", "a");
        $datos = array(
            array($_POST['Clave'], $_POST['Nombre'])
        );
        foreach($datos as $linea){
            fputcsv($manejador,$linea);
        }
        fclose($manejador);
    }else{
        print("El QUERY ha fallado!");
    }
    Cerrar($conexion);
?>