<?php
    // $Id=$_POST['Id'];
    // Las variables se han comentado para las pruebas del DELETE.
    // $RFC=$_POST['RFC'];
    // $Nombre=$_POST['Nombre'];
    // $Domicilio=$_POST['Domicilio'];

    // print("Id: ".$Id."<br>");
    // print("RFC: ".$RFC."<br>");
    // print("Nombre: ".$Nombre."<br>");
    // print("Domicilio: ".$Domicilio."<br>");

    // Indicar donde acudir por la funciones
    include("Conexion.php");
    $conexion = Conectar();
    // $SQL = "INSERT INTO propietarios VALUES('','$RFC','$Nombre','$Domicilio');";
    // $SQL = "DELETE FROM propietarios WHERE Id=1";
    $SQL = "SELECT * FROM propietarios";
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

    // Forma implicita de insetar datos.
    // Implicita-----
    // INSERT INTO table VALUES(val1, val2, val,3...,'valN');
    // Explicita-----------
    // INSERT INTO table(atrr1, atrr2, atrr3..., atrrN) VALUES('val1','val2','val3'...,'valN');
?>