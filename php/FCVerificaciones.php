<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos-tabla.css">
    <title>FCPropietarios</title>
</head>
<body>
    <h1>Propietarios</h1>
    <form method="GET">
    <label for="criterio">Criterio</label>
    <input type="text" name="criterio" placeholder="Criterio" id="criterio">

    <label for="ID">ID</label>
    <input type="radio" name="atributo" value="Idverificaciones" id="ID" />

    <label for="tipo-verificacion">Tipo</label>
    <input type="radio" name="atributo" value="Tipo" id="tipo-verificacion" />

    <label for="dicatamen-verificacion">Dictamen</label>
    <input type="radio" name="atributo" value="Dictamen" id="dicatamen-verificacion" />

    <label for="periodo-verificacion">Periodo</label>
    <input type="radio" name="atributo" value="Periodo" id="periodo-verificacion" />

    <label for="vigencia-verificacion">Vigencia</label>
    <input type="radio" name="atributo" value="Vigencia" id="vigencia-verificacion" />

    <label for="centro-verificacion">Centro Verificador</label>
    <input type="radio" name="atributo" value="Centroverificaciones" id="centro-verificacion" />


    <input type="submit">
    </form>

    <?php
    // Debugeo
    // die(var_dump($SQL));
    include('Conexion.php');
    if(isset($_REQUEST['criterio']) and isset($_REQUEST['atributo'])){
        $criterio = $_REQUEST["criterio"];
        $atributo = $_REQUEST['atributo'];
        $con = Conectar();
        // Consulta SQL
        $SQL = "SELECT * FROM verificaciones WHERE $atributo = '$criterio'";
        // $r es el resultado.
        $r = Consultar($con, $SQL); 
        if($r != NULL){
            // $n es el numero de de filas afectadas por la consulta SELECT
            // $C es el numero de de columnas afectadas por la consulta SELECT
            $c = mysqli_num_fields($r);
            $n = mysqli_num_rows($r);
            // print("El numero de filas afectadas es: ".$n."<br>");
            // print("El numero de columnas de la consulta es: ".$c."<br>");
            ?>
            <table align="center">
                <!-- Cabecera -->
                <tr>
                    <td colspan="100%"><p>Resultados</p></td>
                </tr>
                <tr>
                    <th>Indice</th>
                    <?php for ($i=0; $i < $c ; $i++) {?>
                    <th><?php print(mysqli_fetch_field($r)->name); ?></th>
                    <?php } ?>
                </tr>

            <?php for($f=0; $f<$n; $f++){
                $fila = mysqli_fetch_row($r);
            ?>
            <tr>
                <td><?php print($f+1);?></</td>
                <?php for($x=0;$x<$c;$x++){?>
                <td><?php print($fila[$x]);}}?></td>
            </tr>
            <tr>
                <td colspan="100%"><?php print("La cantidad de filas afectadas fue: ".$n);?></td>
            </tr>
            </table>
            <?php
            }else{
            print("El QUERY ha fallado!");
        }
        Cerrar($con);
    }
    ?>
</body>
</html>