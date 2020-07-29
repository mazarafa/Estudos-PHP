<?php
$arrFrutas = [
    1 => "Abacaxi",
    2 => "Banana",
    3 => "Goiaba",
    4 => "Manga",
    5 => "Uva"];

//foreach($arrFrutas as $key => $v){
//    echo "Key: {$key} => Value: {$v} <br >";
//}
?>
<!doctype html>
<html lang="pt-br">
    <head>
        <title>Array</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <ul>
            <?php
            foreach ($arrFrutas as $valor) {
                ?>
                <li><?= $valor ?></li>
                <?php
            }
            ?>
        </ul>
    </body>
</html>
