<?php
$arrayNome = ["Valentina", "Fernanda", "Pedro", "Fernanda", "Lucas", "Marcos", "Joana"];
//$nome = $_GET["nome"];
//$email = $_GET["email"];
//echo $nome;
//echo "<br>" . $email;

$nome = filter_input(INPUT_GET, "txtNome", FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_GET, "txtEmail", FILTER_SANITIZE_STRING);
$funcionarioCod = filter_input(INPUT_GET, "slFuncionario", FILTER_SANITIZE_NUMBER_INT);
$funcionario = "";

if($funcionarioCod){
    $funcionario = $arrayNome[($funcionarioCod - 1)];
}
?>
<!doctype html>
<html lang="pt-br">
    <head>
        <title>Formulário</title>
        <meta charset="utf-8" />
        <style>
            ul{
                list-style: none;
            }
            input, select{
                padding: 5px;
                margin-top: 10px;
            }
        </style>
    </head>
    <body>
        <form method="GET">
            <ul>
                <li>Nome: <input type="text" name="txtNome" /></li>
                <li>E-mail: <input type="text" name="txtEmail" /></li>
                <li>Funcionário: 
                    <select name="slFuncionario">
                        <?php
                        for ($i = 0; $i < count($arrayNome); $i++) {
                            ?>
                            <option value="<?= ($i + 1); ?>"><?= $arrayNome[$i]; ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </li>
                <li><input type="submit" name="btnSubmit" value="Cadastrar" />
                    <a href="http://localhost/Curso_PHP/Aula_15/">Atualizar</a></li>
            </ul>
        </form>
        <br /><hr/><br />
        <p>Nome: <?= $nome; ?></p>
        <p>E-mail: <?= $email; ?></p>
        <p>Funcionário: <?= $funcionario; ?></p>
    </body>
</html>