<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subida Ficheros</title>
</head>
<body>
    <?php
    if($_FILES['fichero']['error']){
        print("Se ha producido un error: ".$_FILES['fichero']['error']);
    }else{
        if(@move_uploaded_file($_FILES['fichero']['tmp_name'], "C:\\xampp\\files\\" . $_FILES['fichero']['name'])){
            print("El archivo se ha subido con exito.");
        }else{
            print("EL archvivo no se ha podido subir");
        }
    }
    ?>
</body>
</html>