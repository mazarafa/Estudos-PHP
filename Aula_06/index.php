<?php
$msg = "";
switch (4) {
    case 1:
        $msg = "Dia 1";
        break;
    case 2:
        $msg = "Dia 2";
        break;
    case 3:
        $msg = "Dia 3";
        break;
    case 4:
        $msg = "Dia 4";
        break;
    case 5:
        $msg = "Dia 5";
        break;
    default:
        $msg = "Não encontrado";
}
?>
<!doctype html>
<html lang="pt-br">
    <head>
        <title>switch</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <p>Olá, hoje é o <?= $msg; ?></p>
    </body>
</html>