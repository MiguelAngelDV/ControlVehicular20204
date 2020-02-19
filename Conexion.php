<?php
    function Conectar(){
        $Usuario = "root";
        $Password = "";
        $BD = "ControlVehicular20204";
        $Servidor = "localhost";
        $Con  = mysqli_connect($Servidor, $Usuario, $Password, $BD);
        return $Con;
    }
    
    function Consultar($Con, $SQL){
        $resultado = mysqli_query($Con, $SQL) or die (mysqli_error($Con));
        return $resultado;
    }

    // Funcion booleana
    function Cerrar($Con){
        mysqli_close($Con);
    }
?>