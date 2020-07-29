<?php
$idade = 20;
$senha = "1234";
$acesso = true;

//
//if($idade < 18){
//    echo "Okay";
//}else{
//    echo "Inválido!!!";
//}
//
//if ($senha == "123") {
//    echo "Acesso autorizado, nível 1";
//} else if ($senha == "1234") {
//    echo "Acesso autorizado, nível 2";
//} else {
//    echo "Acesso negado!";
//}
//if (($idade >= 18) || ($senha != 1234)) {
//    echo "Acesso autorizado, nível 1";
//} else {
//    echo "Acesso negado!";
//}
//if ($acesso && $idade >= 18) {
//    echo "Okay, entra";
//} else {
//    echo "Invalid";
//}
?>
<!doctype html>
<html lang="pt-br">
    <head>
        <title>IF</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <?php
        if ($idade >= 18 && $acesso) {
            ?>
            <h1 style="color:green">Autorizado</h1>
            <?php
        } else {
            ?>
            <h1 style='color:red'>Negado</h1>
            <?php
        }
        ?>
    </body>
</html>