<?php
    // No se obtiene la clave ya que esta en la BD y se asigna de manera automatica.
    // Las variables se encuentran comentadas para realizar las pruebas del DELETE.
    // $Clave=$_POST['Clave'];
    // $Nombre=$_POST['Nombre'];
    // print("Nombre: ".$Nombre."<br>");

    // ===================================
    // Conexion
    // Indicar donde acudir por la funciones
    // ====================================
    include("Conexion.php");
    $conexion = Conectar();
    //  ===== Inserción a la base de datos =====
    // $SQL = "INSERT INTO agentes VALUES('','$Nombre');";
    $SQL = "DELETE FROM agentes WHERE Claveagente =3";
    $resultado = Consultar($conexion, $SQL);
    if($resultado){
        print("El QUERY se ha realizado con exito!<br>");
    }else{
        print("El QUERY ha fallado!");
    }
    print("Resultado: ".$resultado);
    Cerrar($conexion);
?>