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
        
        <label for="niv-vehiculo">NIV</label>
        <input type="radio" name="atributo" value="NIV" id="niv-vehiculo" />

        <label for="origen-vehiculo">Origen</label>
        <input type="radio" name="atributo" value="Origen" id="origen-vehiculo" />

        <label for="puertas-vehiculo">Numero de puertas</label>
        <input type="radio" name="atributo" value="Puertas" id="puertas-vehiculo" />

        <label for="transmision-vehiculo">Transmision</label>
        <input type="radio" name="atributo" value="Transmision" id="transmision-vehiculo" />

        <label for="cilidros-vehiculo">Cilindraje</label>
        <input type="radio" name="atributo" value="Cilindros" id="cilidros-vehiculo" />

        <label for="marca-vehiculo">Marca</label>
        <input type="radio" name="atributo" value="Marca" id="marca-vehiculo" />

        <label for="modelo-vehiculo">Modelo</label>
        <input type="radio" name="atributo" value="Modelo" id="modelo-vehiculo" />

        <label for="serie-vehiculo">Serie</label>
        <input type="radio" name="atributo" value="Serie" id="serie-vehiculo" />

        <label for="capacidad-vehiculo">Capacidad</label>
        <input type="radio" name="atributo" value="Capacidadpeso" id="capacidad-vehiculo" />

        <label for="tipo-vehiculo">Tipo</label>
        <input type="radio" name="atributo" value="Tipo" id="tipo-vehiculo" />

        <label for="uso-vehiculo">Uso</label>
        <input type="radio" name="atributo" value="Uso" id="uso-vehiculo" />

        <label for="version-vehiculo">Version</label>
        <input type="radio" name="atributo" value="Version" id="version-vehiculo" />

        <label for="color-vehiculo">Color</label>
        <input type="radio" name="atributo" value="Color" id="color-vehiculo" />

        <label for="aseguradora-vehiculo">Aseguradora</label>
        <input type="radio" name="atributo" value="Aseguradora" id="aseguradora-vehiculo" />

        <label for="placa-vehiculo">Placa</label>
        <input type="radio" name="atributo" value="Placa" id="placa-vehiculo" />

        <label for="motor-vehiculo">No Motor</label>
        <input type="radio" name="atributo" value="Motor" id="motor-vehiculo" />

        <label for="combustible-vehiculo"></label>
        <input type="radio" name="atributo" value="Combustible" id="combustible-vehiculo">

        <label for="propietario-vehiculo">Propietario</label>
        <input type="radio" name="atributo" value="Propietario" id="propietario-vehiculo" />

        <label for="verificaciones-vehiculo">Verificaciones</label>
        <input type="radio" name="atributo" value="verificaciones" id="verificaciones-vehiculo">

        <input type="submit"/>

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
        $SQL = "SELECT * FROM vehiculo WHERE $atributo = '$criterio'";
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