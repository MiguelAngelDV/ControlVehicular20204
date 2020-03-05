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
    $SQL = "DELETE FROM propietarios WHERE Id=1";
    $resultado = Consultar($conexion, $SQL);
    if($resultado){
        print("EL QUERY SE HA REALIZADO CON EXITO!<br>");
        print("Resultado: ".$resultado);
    }else{
        print("EL QUERY HA FALLADO!");
    }
    Cerrar($conexion);

    // Forma implicita de insetar datos.
    // Implicita-----
    // INSERT INTO table VALUES(val1, val2, val,3...,'valN');
    // Explicita-----------
    // INSERT INTO table(atrr1, atrr2, atrr3..., atrrN) VALUES('val1','val2','val3'...,'valN');
?>