<?php
//$arrayNome = array("Pedro", "Fernanda", "Lucas", "Marcos", "Joana");
$arrayNome = ["Valentina", "Fernanda", "Pedro", "Fernanda", "Lucas", "Marcos", "Joana"];
//
//for ($i = 0; $i < count($arrayNome); $i++) {
//    echo $arrayNome[$i] . "<br />";
//}
?>
<!doctype html>
<html lang="pt-br">
    <head>
        <title>Array</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <select id="slProfessores" name="slProfessores">
            <?php
            for ($i = 0; $i < count($arrayNome); $i++) {
                ?>
                <option value="<?= $i; ?>"><?= $arrayNome[$i]; ?></option>
                <?php
            }
            ?>
        </select>
        <button onclick="alert(document.getElementById('slProfessores').value);">Selecionar</button>
    </body>
</html>
