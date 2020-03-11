<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos-tabla.css">
    <title>FCAgentes</title>
</head>
<body>
    <h1>Agentes</h1>
    <form method="GET">
    <label for="criterio">Criterio</label>
    <input type="text" name="criterio" placeholder="Criterio" id="criterio">
    <label for="clv-agente">Clave Agente</label>
    <input type="radio" name="atributo" value="Claveagente" id="clv-agente">
    <label for="nombre">Nombre</label>
    <input type="radio" name="atributo" value="Nombre" id="nombre">
    <input type="submit">
    </form>

    <?php
    // Debuggging die(var_dump($SQL));
    include('Conexion.php');
    if(isset($_REQUEST['criterio'])  and isset($_REQUEST['atributo'])){
        $criterio = $_REQUEST["criterio"];
        $atributo = $_REQUEST['atributo'];
        $con = Conectar();
        // Consulta SQL
        $SQL = "SELECT * FROM agentes WHERE $atributo = '$criterio'";
        // $r es el resultado.
        $r = Consultar($con, $SQL); 
        if($r != NULL){
            // $n es el numero de de filas afectadas por la consulta SELECT
            // $C es el numero de de columnas afectadas por la consulta SELECT
            $c = mysqli_num_fields($r);
            $n = mysqli_num_rows($r);
            ?>
            <table>
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
            <!-- Creacion de las filas -->
            <tr>
                <td><?php print($f+1);?></</td>
                <?php for($x=0;$x<$c;$x++){?>
                <td><?php print($fila[$x]);}}?></td>
            </tr>
            <!-- Fila final -->
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
