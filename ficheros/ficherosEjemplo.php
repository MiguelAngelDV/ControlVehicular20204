<!DOCTYPE HTML5>
<html>
    <head>
        <meta charset="utf-8">
        <title>Prueba de lectura para directorio</title>
    </head>
    <body>
    <?php
        if(empty($_GET['nomdir'])){
            $nomdir = './';
        }else{
            $nomdir = $_GET['nomdir'].'/';
        }
        $dir = opendir($nomdir);
        ?><h1>Contenido de <?php print($nomdir); ?></h1><?php
        print('<pre>');
        print('<b>');
        print(str_pad('Nombre',40));
        print(str_pad('Fecha de ultima modificación',40));
        print(str_pad('Tamaño',30));
        print('<b></pre>');
        print('<hr/><pre>');


        while(FALSE !== ($fichero = readdir($dir))){
            if(is_dir($fichero)){
                ?><a href="?nomdir=<?php echo urlencode($nomdir.$fichero);?>"><?php print($fichero); ?></a><?php
                print(str_repeat(' ', 40 - strlen($fichero)));
                print(str_pad(date('d/m/y H:i',filemtime($nomdir.$fichero)),40));
                print(str_pad('-',30).'<br>');
            }else{
                print(str_pad($fichero, 40));
            print(str_pad(date('d/m/y H:i', filemtime($nomdir.$fichero)),40));
                print(str_pad(filesize($nomdir.$fichero).' bytes', 30).'<br>');
            }
        }
        closedir($dir);
        print('</pre><hr/>');
    ?>
    </body>
</html>