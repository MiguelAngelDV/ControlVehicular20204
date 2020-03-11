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
    // $SQL = "DELETE FROM agentes WHERE Claveagente =3";
    $SQL = "SELECT * FROM agentes";
    $resultado = Consultar($conexion,$SQL);
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