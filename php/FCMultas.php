<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos-tabla.css">
    <title>FCMultas</title>
</head>
<body>
    <h1>Multas</h1>
    <form method="GET">
    <label for="criterio">Criterio</label>
    <input type="text" name="criterio" placeholder="Criterio" id="criterio">

    <label for="Idmulta">ID</label>
    <input type="radio" name="atributo" value="Idmulta" id="Idmulta">

    <label for="Motivo">Motivo</label>
    <input type="radio" name="atributo" value="Motivo" id="Motivo">

    <label for="Fecha">Fecha<label>
    <input type="radio" name="atributo" value="Fecha" id="Fecha">

    <label for="Hora">Hora</label>
    <input type="radio" name="atributo" value="Hora" id="Hora">

    <label for="Fundamento">Fundamento</label>
    <input type="radio" name="atributo" value="Fundamento" id="Fundamento">

    <label for="Lugar">Lugar</label>
    <input type="radio" name="atributo" value="Lugar" id="Lugar">

    <label for="Garantia">Garantia</label>
    <input type="radio" name="atributo" value="Garantia" id="Garantia">

    <label for="Observacion">Observacion</label>
    <input type="radio" name="atributo" value="Observacion" id="Observacion">

    <label for="Agente">Agente</label>
    <input type="radio" name="atributo" value="Agente" id="Agente">

    <label for="Vehiculo">Vehiculo</label>
    <input type="radio" name="atributo" value="Vehiculo" id="Vehiculo">

    <label for="Licencia">Licencia</label>
    <input type="radio" name="atributo" value="Licencia" id="Licencia">

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
        $SQL = "SELECT * FROM multas WHERE $atributo = '$criterio'";
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