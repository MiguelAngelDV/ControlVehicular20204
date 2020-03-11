<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos-tabla.css">
    <title>FCConductores</title>
</head>
<body>
    <h1>Conductores</h1>
    <form method="GET">
    <label for="criterio">Criterio</label>
    <input type="text" name="criterio" placeholder="Criterio" id="criterio">

    <label for="Idconductores">ID</label>
    <input type="radio" name="atributo" value="Idconductor" id="Idconductores">

    <label for="nombre">Nombre</label>
    <input type="radio" name="atributo" value="Nombre" id="nombre">

    <label for="observaciones">Observaciones<label>
    <input type="radio"  name="atributo" value="observaciones" id="observaciones">

    <label for="fechaNacimiento">Fecha Nacimiento</label>
    <input type="radio"  name="atributo" value="FechaNacimiento" id="fechaNacimiento">

    <label for="foto">Foto</label>
    <input type="radio"  name="atributo" value="Foto" id="foto">

    <label for="firma">Firma</label>
    <input type="radio"  name="atributo" value="Firma" id="firma">

    <label for="reestricion">Reestriccion</label>
    <input type="radio"  name="atributo" value="Reestriccion" id="reestricion">

    <label for="antiguedad">Antiguedad</label>
    <input type="radio"  name="atributo" value="Antiguedad" id="antiguedad">

    <label for="numEmergencias">Numero Emergencias</label>
    <input type="radio"  name="atributo" value="Numemergencias" id="numEmergencias">

    <label for="Donador">Donador</label>
    <input type="radio"  name="atributo" value="Donador" id="Donador">

    <label for="grupoSanguineo">Grupo Sanguineo</label>
    <input type="radio"  name="atributo" value="GrupoSanguineo" id="grupoSanguineo">

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
        $SQL = "SELECT * FROM conductores WHERE $atributo = '$criterio'";
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