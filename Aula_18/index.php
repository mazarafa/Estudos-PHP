<?php
//include("gravar.php");
//Gravar("Include", "file.txt");
//
//include("leer.php");
////$texto = Leitura("file.txt");
////echo $texto;

require_once("gravar.php");
Gravar("Include", "file.txt");

require_once("ler.php");
$texto = Leitura("file.txt");
?>
<!doctype html>
<html lang="pt-br">
    <head>
        <title>Include/Require</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <h1>
            <?php
         echo Leitura("file.txt");
            ?>
        </h1>
    </body>
</html>
