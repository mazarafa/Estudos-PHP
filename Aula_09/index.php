<?php
//$i = 0;
//do {
//    echo "Valor: {$i} <br>";
//    //$i++;
//} while ($i == -1);
?>
<!doctype html>
<html lang="pt-br">
    <head>
        <title>dowhile</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <ul>
            <?php
            $i = 1;
            do {
                ?>
                <li>Valor = <?= $i; ?></li>
                <?php
                $i++;
            } while ($i <= 10);
            ?>
        </ul>
    </body>
</html>
